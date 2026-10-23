#!/usr/bin/env python3
"""go2php api-layer translator.

Translates <upstream>/api/api_*.go into PHP classes under <out>/src/Api/:

  * <ServiceName>.php        - one per Go `XxxApiService`
  * <RequestStructName>.php  - fluent request builder per Go request struct

Special case: api_common.go -> CommonApiService.php / CommonApiRequest.php.

The upstream checkout and the output package are resolved by common.py:
``--upstream`` / ``--out`` first, then ``OCEANENGINE_UPSTREAM`` /
``OCEANENGINE_OUT``, then the default layout next to this package.

Stats are printed to stdout; per-file failures (with tracebacks) are appended
to tools/go2php/api_failures.log. Success requires 0 failures.
"""

import os
import re
import sys
import traceback

TOOLS_DIR = os.path.dirname(os.path.abspath(__file__))
if TOOLS_DIR not in sys.path:
    sys.path.insert(0, TOOLS_DIR)

import common  # noqa: E402
import sync_meta  # noqa: E402

GO_API_DIR = None
GO_MODELS_DIR = None
OUT_DIR = None
FAIL_LOG = os.path.join(TOOLS_DIR, "api_failures.log")
GEN_NOTE = "本文件由 go2php 生成，源: %s"


# ---------------------------------------------------------------------------
# helpers
# ---------------------------------------------------------------------------

def lcfirst(name):
    return name[0].lower() + name[1:] if name else name


def php_prop(go_field):
    # Go escapes reserved words with a trailing underscore (type_ -> type)
    if go_field.endswith("_"):
        return go_field[:-1]
    return go_field


def esc_php(s):
    """Escape a literal for use inside a single-quoted PHP string."""
    return s.replace("\\", "\\\\").replace("'", "\\'")


def esc_doc(s):
    """Make a docblock line safe (mirror of models.py esc_doc)."""
    return s.replace("*/", "* /")


def load_enums(go_models_dir):
    """Names of Go model types defined as `type X string` (enum-likes)."""
    enums = set()
    if not os.path.isdir(go_models_dir):
        return enums
    for fname in os.listdir(go_models_dir):
        if not fname.endswith(".go"):
            continue
        with open(os.path.join(go_models_dir, fname), encoding="utf-8") as fh:
            for line in fh:
                m = re.match(r"^type (\w+) string\b", line)
                if m:
                    enums.add(m.group(1))
    return enums


ENUMS = set()

GO_SCALAR_MAP = {
    "string": "string",
    "int": "int",
    "int64": "int",
    "int32": "int",
    "float64": "float",
    "float32": "float",
    "bool": "bool",
}


class Field(object):
    """One parameter field of a Go request struct."""

    def __init__(self, go_name, go_type):
        self.go_name = go_name
        self.go_type = go_type
        base = go_type.lstrip("*")
        self.base = base
        self.prop = php_prop(go_name)
        self.nullable = True
        self.element = None  # for slice types: element base type

        if base.startswith("[]"):
            self.kind = "array"
            self.element = base[2:].lstrip("*")
            hint = "array"
        elif base.startswith("map["):
            self.kind = "array"
            hint = "array"
        elif base == "interface{}":
            self.kind = "mixed"
            hint = ""
        elif base in GO_SCALAR_MAP:
            self.kind = "scalar"
            hint = GO_SCALAR_MAP[base]
        elif base == "FormFileInfo":
            self.kind = "formfile"
            hint = "\\Oceanengine\\FormFileInfo"
        elif base in ENUMS:
            # PHP enum models are constant-holder classes; values are plain strings
            self.kind = "enum"
            hint = "string"
        elif re.match(r"^[A-Z]", base):
            self.kind = "model"
            hint = "\\Oceanengine\\Models\\" + base
        else:
            self.kind = "mixed"
            hint = ""
        self.hint = hint

    @property
    def element_kind(self):
        if self.element is None:
            return None
        e = self.element
        if e in GO_SCALAR_MAP:
            return "scalar"
        if e in ENUMS:
            return "enum"
        if re.match(r"^[A-Z]", e):
            return "model"
        return "mixed"

    def doc_type(self):
        if self.kind == "array":
            if self.element in GO_SCALAR_MAP or self.element in ENUMS:
                t = GO_SCALAR_MAP.get(self.element, "string")
                return t + "[]"
            if self.element:
                return "\\Oceanengine\\Models\\" + self.element + "[]"
            return "array"
        if self.kind == "scalar":
            return self.hint
        if self.kind == "enum":
            return "string"
        if self.kind == "model":
            return "\\Oceanengine\\Models\\" + self.base
        if self.kind == "formfile":
            return "\\Oceanengine\\FormFileInfo"
        return "mixed"


# ---------------------------------------------------------------------------
# Go source parsing
# ---------------------------------------------------------------------------

RE_SERVICE = re.compile(r"^type (\w+ApiService) service", re.M)
RE_STRUCT = re.compile(r"^type (\w+) struct \{\n(.*?)\n\}", re.M | re.S)
RE_FIELD = re.compile(r"^\t(\w+)\s+(\*?\*?[\w\.\[\]]+(?:\[\])?(?:\{[^}]*\})?|\*?\[\][\w\.\*]+|[^\s]+)\s*$")


def parse_struct_fields(src):
    """Return {struct_name: [Field, ...]} skipping ctx / ApiService."""
    out = {}
    for m in RE_STRUCT.finditer(src):
        name, body = m.group(1), m.group(2)
        fields = []
        for line in body.splitlines():
            line = line.rstrip()
            if not line.startswith("\t"):
                continue
            m2 = re.match(r"^\t(\w+)\s+(.+?)\s*$", line)
            if not m2:
                continue
            fname, ftype = m2.group(1), m2.group(2)
            if fname in ("ctx", "ApiService"):
                continue
            fields.append(Field(fname, ftype))
        out[name] = fields
    return out


RE_SETTER = re.compile(
    r"^func \(r \*(\w+)\) (\w+)\((\w+) ([^)]+)\) \*(\w+) \{",
    re.M,
)


def parse_setters(src):
    """{struct_name: [(setter_name, go_type, field_name, doc)]}"""
    out = {}
    for m in RE_SETTER.finditer(src):
        struct, setter, pname, ptype, _ret = m.groups()
        # find the assignment `r.<field> = ...` within the next few lines
        tail = src[m.end():m.end() + 400].splitlines()[:4]
        field = None
        for tl in tail:
            m2 = re.match(r"\tr\.(\w+) = &?%s\s*$" % re.escape(pname), tl)
            if m2:
                field = m2.group(1)
                break
        if field is None:
            continue
        start = m.start()
        # collect contiguous // comment lines directly above
        prefix = src[:start].rstrip("\n")
        doc_lines = []
        for pline in reversed(prefix.split("\n")):
            s = pline.strip()
            if s.startswith("//"):
                doc_lines.insert(0, s[2:].strip())
            elif s == "" or s == "*/":
                break
            else:
                break
        doc = "\n".join(l for l in doc_lines if l)
        out.setdefault(struct, []).append((setter, ptype, field, doc))
    return out


RE_SVC_METHOD = re.compile(
    r"/\*\n(?P<doc>(?:(?!\n\*/).)*?)\n\*/\nfunc \(a \*(?P<svc>\w+)\) (?P<method>\w+)\(ctx context\.Context\) \*(?P<req>\w+) \{",
    re.S,
)


def parse_service_methods(src):
    """[(doc, service, go_method, request_struct)]"""
    out = []
    for m in RE_SVC_METHOD.finditer(src):
        doc, service, method, req = m.group("doc"), m.group("svc"), m.group("method"), m.group("req")
        desc = []
        for dl in doc.splitlines():
            s = dl.strip().lstrip("*").strip()
            if not s or s.startswith("@param") or s.startswith("@return"):
                continue
            if s.endswith(" Method for " + s.split(" ")[0]):
                continue
            desc.append(s)
        out.append(("\n".join(desc), service, method, req))
    return out


def find_func_body(src, marker):
    """Return the body (list of lines) of the function whose signature contains marker."""
    idx = src.find(marker)
    if idx < 0:
        return None
    brace = src.find("{", idx)
    if brace < 0:
        return None
    depth = 0
    for i in range(brace, len(src)):
        ch = src[i]
        if ch == "{":
            depth += 1
        elif ch == "}":
            depth -= 1
            if depth == 0:
                return src[brace + 1:i].splitlines()
    return None


RE_EXECUTE_SIG = re.compile(r"func \(a \*(\w+)\) (\w+Execute)\(r \*(\w+)\)")


def parse_execute(src):
    """Parse a `xxxExecute` function body into an operation dict."""
    matches = list(RE_EXECUTE_SIG.finditer(src))
    if len(matches) != 1:
        raise ValueError(
            "expected exactly 1 *Execute function, found %d" % len(matches)
        )
    m = matches[0]
    service, exec_name, req = m.groups()
    lines = find_func_body(src, m.group(0))
    if lines is None:
        raise ValueError("cannot extract body of %s" % exec_name)

    op = {
        "service": service,
        "request": req,
        "method": None,
        "path": None,
        "return_type": None,
        "content_type": None,
        "validations": [],   # (kind, field, cmp, n, message)
        "adds": [],          # (target, key, field|None, optional_field|None)
        "body_field": None,
    }

    i = 0
    while i < len(lines):
        s = lines[i].strip()

        m2 = re.match(r"localVarHTTPMethod\s+= http\.Method(\w+)", s)
        if m2:
            op["method"] = m2.group(1).upper()

        m2 = re.match(r'localVarPath := localBasePath \+ "((?:[^"\\]|\\.)*)"', s)
        if m2:
            op["path"] = m2.group(1)

        m2 = re.match(r"localVarReturnValue \*([\w\.]+)", s)
        if m2:
            op["return_type"] = m2.group(1)
        m2 = re.match(r"localVarReturnValue \[\]byte", s)
        if m2:
            op["return_type"] = "[]byte"

        m2 = re.match(r'localVarHTTPContentTypes := \[\]string\{([^}]*)\}', s)
        if m2:
            types = [t.strip().strip('"') for t in m2.group(1).split(",") if t.strip()]
            if "application/json" in types:
                op["content_type"] = "application/json"
            elif "multipart/form-data" in types:
                op["content_type"] = "multipart/form-data"

        # ---- validations -------------------------------------------------
        m2 = re.match(r"if r\.(\w+) == nil \{", s)
        if m2:
            msg = report_error_message(lines, i)
            op["validations"].append(("required", m2.group(1), None, None, msg))
        m2 = re.match(r"if len\(\*r\.(\w+)\) (<|>) (\d+) \{", s)
        if m2:
            msg = report_error_message(lines, i)
            op["validations"].append(("count", m2.group(1), m2.group(2), int(m2.group(3)), msg))
        m2 = re.match(r"if strlen\(\*r\.(\w+)\) (<|>) (\d+) \{", s)
        if m2:
            msg = report_error_message(lines, i)
            op["validations"].append(("strlen", m2.group(1), m2.group(2), int(m2.group(3)), msg))
        m2 = re.match(r"if \*r\.(\w+) (<|>) (\d+) \{", s)
        if m2:
            msg = report_error_message(lines, i)
            op["validations"].append(("scalar", m2.group(1), m2.group(2), int(m2.group(3)), msg))

        # ---- parameter adds ------------------------------------------------
        m2 = re.match(r'parameterAddToHeaderOrQuery\((\w+), "((?:[^"\\]|\\.)*)", (.+?)\)$', s)
        if m2:
            target, key, arg = m2.groups()
            m3 = re.match(r"r\.(\w+)$", arg.strip())
            op["adds"].append((target, key, m3.group(1) if m3 else None, None))

        m2 = re.match(r'formFiles\["((?:[^"\\]|\\.)*)"\] = r\.(\w+)$', s)
        if m2:
            op["adds"].append(("formFiles", m2.group(1), m2.group(2), None))

        m2 = re.match(r"localVarPostBody = r\.(\w+)$", s)
        if m2:
            op["body_field"] = m2.group(1)

        i += 1

    # resolve `if r.X != nil { ...add... }` optionality: an add whose block is
    # guarded becomes optional; walk with a tiny state machine.
    op["adds"] = resolve_optionality(lines, op["adds"])
    return op


def report_error_message(lines, i):
    for j in range(i, min(i + 4, len(lines))):
        m = re.search(r'ReportError\("((?:[^"\\]|\\.)*)"\)', lines[j])
        if m:
            return m.group(1)
    return "invalid value"


def resolve_optionality(lines, adds):
    """Mark adds guarded by `if r.X != nil {` as conditional on X."""
    text = "\n".join(lines)
    guarded = set()
    for m in re.finditer(r"if r\.(\w+) != nil \{\n\t+(parameterAddToHeaderOrQuery\(.*|formFiles\[.*)\n\t*\}", text):
        field, stmt = m.groups()
        guarded.add((stmt.strip(), field))
    out = []
    for target, key, field, _ in adds:
        optional = None
        for stmt, gfield in guarded:
            if key in stmt and ('"%s"' % key) in stmt:
                optional = gfield
                break
        out.append((target, key, field, optional))
    return out


# ---------------------------------------------------------------------------
# PHP emission
# ---------------------------------------------------------------------------

TARGET_MAP = {
    "localVarQueryParams": "query",
    "localVarFormParams": "form",
    "localVarHeaderParams": "headers",
}


def value_expr(field):
    """PHP expression producing the serialized value of a field."""
    if field is None:
        return "null"
    if field.kind == "model":
        return "json_encode($this->%s)" % field.prop
    if field.kind == "array" and field.element_kind == "model":
        return "json_encode($this->%s)" % field.prop
    return "$this->%s" % field.prop


def emit_validation(val, fields_by_go):
    kind, field, cmp, n, msg = val
    f = fields_by_go.get(field)
    prop = f.prop if f else php_prop(field)
    msg_php = esc_php(msg)
    if kind == "required":
        return "        if ($this->%s === null) {\n            throw new \\InvalidArgumentException('%s');\n        }" % (prop, msg_php)
    if kind == "count":
        return "        if (count($this->%s) %s %d) {\n            throw new \\InvalidArgumentException('%s');\n        }" % (prop, cmp, n, msg_php)
    if kind == "strlen":
        return "        if (strlen($this->%s) %s %d) {\n            throw new \\InvalidArgumentException('%s');\n        }" % (prop, cmp, n, msg_php)
    if kind == "scalar":
        return "        if ($this->%s %s %d) {\n            throw new \\InvalidArgumentException('%s');\n        }" % (prop, cmp, n, msg_php)
    raise ValueError("unknown validation kind %s" % kind)


def emit_request_class(src_name, req_name, fields, setters, op, desc):
    ret = op["return_type"]
    if not ret:
        raise ValueError("request %s has no return type" % req_name)
    is_binary = ret == "[]byte"
    ret_fqcn = "string" if is_binary else "\\Oceanengine\\Models\\" + ret
    fields_by_go = {f.go_name: f for f in fields}

    setter_by_field = {}
    setter_docs = {}
    for setter, ptype, field, doc in setters:
        setter_by_field[field] = (setter, ptype)
        if doc:
            setter_docs[field] = doc

    # A parameter may itself be named accessToken (e.g. the oauth2 advertiser
    # get endpoint, whose Go AccessToken() setter feeds the access_token query
    # param). In that case the parameter owns the `accessToken()` method, the
    # property is renamed, and the auth-token setter is omitted (same as Go,
    # where this endpoint has no ctx-token setter at all).
    has_token_collision = any(
        php_prop(lcfirst(s)) == "accessToken" for s, _p in setter_by_field.values()
    )
    if has_token_collision:
        for f in fields:
            st = setter_by_field.get(f.go_name, (f.go_name, None))[0]
            if php_prop(lcfirst(st)) == "accessToken":
                f.prop = f.prop + "Param"

    lines = []
    lines.append("<?php")
    lines.append("")
    lines.append("/**")
    lines.append(" * " + (GEN_NOTE % src_name))
    lines.append(" */")
    lines.append("")
    lines.append("declare(strict_types=1);")
    lines.append("")
    lines.append("namespace Oceanengine\\Api;")
    lines.append("")
    if desc:
        lines.append("/**")
        for dl in desc.splitlines():
            lines.append(" * " + dl)
        lines.append(" */")
    lines.append("class %s" % req_name)
    lines.append("{")
    lines.append("    private \\Oceanengine\\ApiClient $apiClient;")
    lines.append("")
    for f in fields:
        doc = setter_docs.get(f.go_name)
        if doc:
            lines.append("    /** @var %s %s */" % (f.doc_type(), esc_doc(doc)))
        hint = f.hint if f.hint else "mixed"
        lines.append("    private ?%s $%s = null;" % (hint, f.prop))
    lines.append("")
    if not has_token_collision:
        lines.append("    /** @var string|null Access-Token */")
        lines.append("    private ?string $accessToken = null;")
        lines.append("")
    lines.append("    private bool $logEnabled = false;")
    lines.append("")
    lines.append("    public function __construct(" + op["service"] + " $service)")
    lines.append("    {")
    lines.append("        $this->apiClient = $service->getApiClient();")
    lines.append("    }")
    lines.append("")

    for f in fields:
        setter, ptype = setter_by_field.get(f.go_name, (f.go_name, f.base))
        mname = php_prop(lcfirst(setter))
        hint = f.hint
        doc = setter_docs.get(f.go_name)
        if doc:
            lines.append("    /**")
            for dl in esc_doc(doc).splitlines():
                lines.append("     * " + dl)
            lines.append("     */")
        params = "%s $%s" % (hint, f.prop) if hint else "$%s" % f.prop
        lines.append("    public function %s(%s): self" % (mname, params))
        lines.append("    {")
        lines.append("        $this->%s = $%s;" % (f.prop, f.prop))
        lines.append("        return $this;")
        lines.append("    }")
        lines.append("")

    if not has_token_collision:
        lines.append("    public function accessToken(string $accessToken): self")
        lines.append("    {")
        lines.append("        $this->accessToken = $accessToken;")
        lines.append("        return $this;")
        lines.append("    }")
        lines.append("")
    lines.append("    public function withLog(bool $enable): self")
    lines.append("    {")
    lines.append("        $this->logEnabled = $enable;")
    lines.append("        return $this;")
    lines.append("    }")
    lines.append("")

    # ---- execute ---------------------------------------------------------
    lines.append("    /**")
    lines.append("     * @throws \\InvalidArgumentException")
    if desc:
        lines.append("     * " + esc_doc(desc).splitlines()[0])
    lines.append("     */")
    lines.append("    public function execute(): %s" % ret_fqcn)
    lines.append("    {")

    for val in op["validations"]:
        lines.append(emit_validation(val, fields_by_go))

    has_query = any(t == "localVarQueryParams" for t, _, _, _ in op["adds"])
    has_form = any(t == "localVarFormParams" for t, _, _, _ in op["adds"])
    has_files = any(t == "formFiles" for t, _, _, _ in op["adds"])
    has_headers = any(t == "localVarHeaderParams" for t, _, _, _ in op["adds"]) or op["content_type"] == "application/json"

    lines.append("        $queryParams = [];")
    lines.append("        $formParams = [];")
    lines.append("        $files = [];")
    lines.append("        $headers = [];")

    encode_counter = [0]
    for target, key, field, optional in op["adds"]:
        f = fields_by_go.get(field) if field else None
        opt_prop = None
        if optional:
            opt_field = fields_by_go.get(optional)
            opt_prop = opt_field.prop if opt_field else php_prop(optional)
        if target == "formFiles":
            stmt = "$files['%s'] = $this->%s;" % (key, f.prop if f else field)
            if opt_prop:
                stmt = "if ($this->%s !== null) {\n            %s\n        }" % (opt_prop, stmt)
            lines.append("        " + stmt)
            continue
        php_target = "$queryParams" if target == "localVarQueryParams" else "$formParams" if target == "localVarFormParams" else "$headers"
        needs_encode = f is not None and (
            f.kind == "model" or (f.kind == "array" and f.element_kind == "model")
        )
        if needs_encode:
            tmp = "$__encoded%d" % encode_counter[0]
            encode_counter[0] += 1
            inner = "%s = json_encode($this->%s);\n            %s" % (
                tmp,
                f.prop,
                "if (%s === false) {\n                throw new \\RuntimeException('Failed to encode parameter: %s');\n            }" % (tmp, f.prop),
            )
            inner += "\n            %s['%s'] = %s;" % (php_target, key, tmp)
            if opt_prop:
                stmt = "if ($this->%s !== null) {\n            %s\n        }" % (opt_prop, inner)
            else:
                stmt = inner
            lines.append("        " + stmt)
            continue
        stmt = "%s['%s'] = %s;" % (php_target, key, value_expr(f))
        if opt_prop:
            stmt = "if ($this->%s !== null) {\n            %s\n        }" % (opt_prop, stmt)
        lines.append("        " + stmt)

    if op["content_type"] == "application/json":
        lines.append("        $headers['Content-Type'] = 'application/json';")

    body_field = fields_by_go.get(op["body_field"]) if op["body_field"] else None
    if body_field is not None:
        lines.append("        $body = json_encode($this->%s);" % body_field.prop)
        lines.append("        if ($body === false) {")
        lines.append("            throw new \\RuntimeException('Failed to encode request body');")
        lines.append("        }")
    elif op["content_type"] == "multipart/form-data":
        # the transport expands a JSON body into multipart form fields
        lines.append("        $body = $formParams === [] ? null : json_encode($formParams);")
        lines.append("        if ($body === false) {")
        lines.append("            throw new \\RuntimeException('Failed to encode request body');")
        lines.append("        }")
    else:
        lines.append("        $body = null;")

    if not op["method"] or not op["path"]:
        raise ValueError("request %s missing method/path" % req_name)

    lines.append("")
    lines.append("        $queryString = $this->apiClient->buildQuery($queryParams);")
    lines.append("        $url = '%s' . ($queryString === '' ? '' : '?' . $queryString);" % esc_php(op["path"]))
    lines.append("        $requestContext = $this->apiClient->prepareRequest('%s', $url, $headers, $body, $files);" % op["method"])
    if has_token_collision:
        lines.append("        // 本接口的 accessToken 为 query 参数（与 Go 一致），不注入 Access-Token 头")
    else:
        lines.append("        $requestContext['accessToken'] = $this->accessToken;")
    lines.append("        $requestContext['enableLog'] = $this->logEnabled;")
    if is_binary:
        lines.append("        $requestContext['responseType'] = 'binary';")
        lines.append("        $result = $this->apiClient->call($requestContext, \\Oceanengine\\Api\\BinaryResponse::class);")
    else:
        lines.append("        $result = $this->apiClient->call($requestContext, %s::class);" % ret_fqcn)
    lines.append("")
    lines.append("        return $result['model'];")
    lines.append("    }")
    lines.append("}")
    lines.append("")
    return "\n".join(lines)


BINARY_RESPONSE_PHP = """<?php

/**
 * 本文件由 go2php 生成
 *
 * 二进制下载接口（Go 中返回 []byte 的 endpoint）的响应载体。
 * Client::init() 注册的内部中间件会把原始响应体 base64 后放入 _b 键，
 * 核心层 call() 因此可以走常规的 fromArray 解码通道把字节串交还给
 * execute(): string。
 */

declare(strict_types=1);

namespace Oceanengine\\Api;

class BinaryResponse
{
    public static function fromArray(array $data): string
    {
        return base64_decode((string)($data['_b'] ?? ''), true) ?: '';
    }
}
"""


def emit_service_class(src_name, service, methods, req_names):
    """methods: [(desc, go_method, req_struct)]"""
    lines = []
    lines.append("<?php")
    lines.append("")
    lines.append("/**")
    lines.append(" * " + (GEN_NOTE % src_name))
    lines.append(" */")
    lines.append("")
    lines.append("declare(strict_types=1);")
    lines.append("")
    lines.append("namespace Oceanengine\\Api;")
    lines.append("")
    lines.append("class %s" % service)
    lines.append("{")
    lines.append("    private \\Oceanengine\\ApiClient $apiClient;")
    lines.append("")
    lines.append("    public function __construct(\\Oceanengine\\ApiClient $apiClient)")
    lines.append("    {")
    lines.append("        $this->apiClient = $apiClient;")
    lines.append("    }")
    lines.append("")
    lines.append("    public function getApiClient(): \\Oceanengine\\ApiClient")
    lines.append("    {")
    lines.append("        return $this->apiClient;")
    lines.append("    }")
    lines.append("")
    for desc, go_method, req in methods:
        if desc:
            lines.append("    /**")
            for dl in esc_doc(desc).splitlines():
                lines.append("     * " + dl)
            lines.append("     */")
        lines.append("    public function %s(): %s" % (lcfirst(go_method), req))
        lines.append("    {")
        lines.append("        return new %s($this);" % req)
        lines.append("    }")
        lines.append("")
    if lines[-1] == "":
        lines.pop()
    lines.append("}")
    lines.append("")
    return "\n".join(lines)


# ---------------------------------------------------------------------------
# api_common.go special case
# ---------------------------------------------------------------------------

COMMON_SERVICE_PHP = """<?php

/**
 * 本文件由 go2php 生成，源: api_common.go
 */

declare(strict_types=1);

namespace Oceanengine\\Api;

class CommonApiService
{
    private \\Oceanengine\\ApiClient $apiClient;

    public function __construct(\\Oceanengine\\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient(): \\Oceanengine\\ApiClient
    {
        return $this->apiClient;
    }

    /**
     * 通用 GET 请求
     */
    public function get(string $path): CommonApiRequest
    {
        return new CommonApiRequest($this, 'GET', $path, '');
    }

    /**
     * 通用 POST 请求（application/json）
     */
    public function post(string $path): CommonApiRequest
    {
        return new CommonApiRequest($this, 'POST', $path, 'application/json');
    }

    /**
     * 通用 POST multipart/form-data 请求
     */
    public function postMultipart(string $path): CommonApiRequest
    {
        return new CommonApiRequest($this, 'POST', $path, 'multipart/form-data');
    }
}
"""

COMMON_REQUEST_PHP = """<?php

/**
 * 本文件由 go2php 生成，源: api_common.go
 */

declare(strict_types=1);

namespace Oceanengine\\Api;

class CommonApiRequest
{
    private \\Oceanengine\\ApiClient $apiClient;

    private string $httpMethod;

    private string $path;

    private string $contentType;

    /** @var mixed */
    private $requestBody;

    /** @var array|null */
    private ?array $requestQuery = null;

    /** @var array|null */
    private ?array $requestFile = null;

    /** @var array|null */
    private ?array $requestForm = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(CommonApiService $service, string $httpMethod, string $path, string $contentType)
    {
        if ($path === '' || $path[0] !== '/') {
            throw new \\InvalidArgumentException('CommonApi path must start with "/" (relative path only, got: ' . $path . ')');
        }
        $this->apiClient = $service->getApiClient();
        $this->httpMethod = $httpMethod;
        $this->path = $path;
        $this->contentType = $contentType;
    }

    /** @param mixed $requestBody */
    public function requestBody($requestBody): self
    {
        $this->requestBody = $requestBody;
        return $this;
    }

    public function requestQuery(array $requestQuery): self
    {
        $this->requestQuery = $requestQuery;
        return $this;
    }

    /** @param array<string, \\Oceanengine\\FormFileInfo> $requestFile */
    public function requestFile(array $requestFile): self
    {
        $this->requestFile = $requestFile;
        return $this;
    }

    public function requestForm(array $requestForm): self
    {
        $this->requestForm = $requestForm;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    public function execute(): \\Oceanengine\\Models\\CommonResponse
    {
        $headers = [];
        if ($this->contentType !== '' && $this->contentType !== 'multipart/form-data') {
            $headers['Content-Type'] = $this->contentType;
        }

        $queryParams = $this->serializeMap($this->requestQuery);
        $formParams = $this->serializeMap($this->requestForm);

        $body = $this->requestBody;
        if ($body !== null && !is_string($body)) {
            $body = json_encode($body);
        }
        if ($body === false) {
            throw new \\RuntimeException('Failed to encode request body');
        }
        if ($body === null && $this->contentType === 'multipart/form-data' && $formParams !== []) {
            // the transport expands a JSON body into multipart form fields
            $body = json_encode($formParams);
            if ($body === false) {
                throw new \\RuntimeException('Failed to encode request body');
            }
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = $this->path . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest($this->httpMethod, $url, $headers, $body, $this->requestFile ?? []);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;

        $result = $this->apiClient->call($requestContext, \\Oceanengine\\Models\\CommonResponse::class);

        return $result['model'];
    }

    /**
     * @param array|null $map
     * @return array
     */
    private function serializeMap(?array $map): array
    {
        $out = [];
        if ($map === null) {
            return $out;
        }
        foreach ($map as $k => $v) {
            if (is_scalar($v) || $v === null) {
                $out[$k] = $v;
            } else {
                $encoded = json_encode($v);
                $out[$k] = $encoded === false ? $v : $encoded;
            }
        }
        return $out;
    }
}
"""


# ---------------------------------------------------------------------------
# main
# ---------------------------------------------------------------------------

def translate_file(path, src_name):
    with open(path, encoding="utf-8") as fh:
        src = fh.read()

    m = RE_SERVICE.search(src)
    if not m:
        raise ValueError("no ApiService type found")
    service = m.group(1)

    structs = parse_struct_fields(src)
    setters = parse_setters(src)
    methods = parse_service_methods(src)
    methods = [x for x in methods if x[1] == service]
    if not methods:
        raise ValueError("no exported methods on %s" % service)

    written = []
    for desc, svc, go_method, req in methods:
        if req not in structs:
            raise ValueError("request struct %s not found" % req)
        op = parse_execute(src)
        if op["request"] != req:
            raise ValueError("execute/request mismatch: %s vs %s" % (op["request"], req))
        php_req = emit_request_class(src_name, req, structs[req], setters.get(req, []), op, desc)
        write_php(req + ".php", php_req)
        written.append(req)

    php_svc = emit_service_class(src_name, service, [(d, mth, r) for d, _, mth, r in methods], written)
    write_php(service + ".php", php_svc)
    return service, written


def write_php(name, content):
    os.makedirs(OUT_DIR, exist_ok=True)
    with open(os.path.join(OUT_DIR, name), "w", encoding="utf-8") as fh:
        fh.write(content)


def main(argv=None):
    global GO_API_DIR, GO_MODELS_DIR, OUT_DIR, ENUMS

    opts = common.parse_common_args(argv)
    GO_API_DIR = os.path.join(opts["upstream"], "api")
    GO_MODELS_DIR = os.path.join(opts["upstream"], "models")
    OUT_DIR = os.path.join(opts["out"], "src", "Api")
    ENUMS = load_enums(GO_MODELS_DIR)

    files = sorted(
        f for f in os.listdir(GO_API_DIR)
        if f.startswith("api_") and f.endswith(".go") and f != "api_common.go"
    )
    failures = []
    services = 0
    requests = 0

    # purge stale generated files so removed endpoints do not linger
    if os.path.isdir(OUT_DIR):
        for stale in os.listdir(OUT_DIR):
            if stale.endswith(".php"):
                os.remove(os.path.join(OUT_DIR, stale))

    for fname in files:
        path = os.path.join(GO_API_DIR, fname)
        try:
            service, reqs = translate_file(path, fname)
            services += 1
            requests += len(reqs)
        except Exception:
            failures.append((fname, traceback.format_exc()))

    # api_common.go
    try:
        write_php("CommonApiService.php", COMMON_SERVICE_PHP)
        write_php("CommonApiRequest.php", COMMON_REQUEST_PHP)
        write_php("BinaryResponse.php", BINARY_RESPONSE_PHP)
        services += 1
        requests += 1
    except Exception:
        failures.append(("api_common.go", traceback.format_exc()))

    os.makedirs(os.path.dirname(FAIL_LOG), exist_ok=True)
    with open(FAIL_LOG, "w", encoding="utf-8") as fh:
        for fname, tb in failures:
            fh.write("=== %s ===\n%s\n" % (fname, tb))

    sync_meta.sync_metadata(argv)

    print("go api files : %d" % len(files))
    print("services     : %d" % services)
    print("requests     : %d" % requests)
    print("failures     : %d (see %s)" % (len(failures), FAIL_LOG))
    return 1 if failures else 0


if __name__ == "__main__":
    sys.exit(main())
