#!/usr/bin/env python3
"""Mechanical translator: Go models (openapi-generator) -> PHP models (Oceanengine\\Models).

Parses <upstream>/models/model_*.go and emits <out>/src/Models/*.php.

The upstream checkout and the output package are resolved by common.py:
``--upstream`` / ``--out`` first, then ``OCEANENGINE_UPSTREAM`` /
``OCEANENGINE_OUT``, then the default layout next to this package.
"""
import glob
import os
import re
import sys

TOOLS_DIR = os.path.dirname(os.path.abspath(__file__))
if TOOLS_DIR not in sys.path:
    sys.path.insert(0, TOOLS_DIR)

import common  # noqa: E402
import sync_meta  # noqa: E402

FAILURES_LOG = os.path.join(TOOLS_DIR, "models_failures.log")

NS = "Oceanengine\\Models"

# ---------------------------------------------------------------------------
# Go type -> PHP mapping
# ---------------------------------------------------------------------------

GO_SCALARS = {
    "string": ("string", "string"),
    "int64": ("int", "int"),
    "int32": ("int", "int"),
    "int": ("int", "int"),
    "float64": ("float", "float"),
    "float32": ("float", "float"),
    "bool": ("bool", "bool"),
    "byte": ("string", "string"),
}

# Go type -> (php_native, php_doc, fallback_note)
GO_SPECIAL = {
    "interface{}": (None, "mixed", None),
    "object": (None, "mixed", None),
    "time.Time": ("string", "string", None),
    "NullableTime": ("string", "string", None),
}

# FormFileInfo is a multipart upload helper from utils.go, not a JSON model.
# Conservatively mapped to mixed (recorded in summary).
FORM_FILE_NOTE = "FormFileInfo mapped to mixed (multipart helper, not a JSON model)"


class UnknownType(Exception):
    pass


def _strip_pointers(go_type):
    nullable = False
    t = go_type
    while t.startswith("*"):
        nullable = True
        t = t[1:]
    return t, nullable


def map_go_type(go_type, struct_names, enum_names, fallbacks):
    """Return dict with keys:
    native: PHP property native type (None => untyped/mixed)
    doc:    PHP docblock type
    kind:   'scalar' | 'model' | 'model_array' | 'model_map' | 'mixed' | 'array'
    model:  referenced model/enum class name when kind involves one
    elem:   mapping of array element (for kind == 'array'), if element is model-ish
    """
    base, nullable = _strip_pointers(go_type)

    # slices
    if base.startswith("[]"):
        elem = base[2:]
        m = map_go_type(elem, struct_names, enum_names, fallbacks)
        doc = m["doc"] + "[]" if not m["doc"].endswith("[]") else m["doc"]
        # element kinds: scalar / mixed / model
        if m["kind"] == "model":
            return {"native": "array", "doc": "\\" + NS + "\\" + m["model"] + "[]",
                    "kind": "model_array", "model": m["model"], "nullable": nullable}
        if m["kind"] == "model_map":
            fallbacks.append("array-of-map-of-model treated as plain array")
            return {"native": "array", "doc": "array<" + m["doc"] + ">[]",
                    "kind": "array", "nullable": nullable}
        if m["kind"] == "map":
            return {"native": "array", "doc": m["doc"] + "[]",
                    "kind": "array", "nullable": nullable}
        if m["kind"] == "array":
            return {"native": "array", "doc": m["doc"] + "[]",
                    "kind": "array", "nullable": nullable}
        if m["kind"] == "scalar":
            return {"native": "array", "doc": m["doc"] + "[]",
                    "kind": "array", "elem_scalar": m["doc"], "nullable": nullable}
        return {"native": "array", "doc": "mixed[]", "kind": "array", "nullable": nullable}

    # maps
    if base.startswith("map[string]"):
        vt = base[len("map[string]"):]
        m = map_go_type(vt, struct_names, enum_names, fallbacks)
        if m["kind"] == "model":
            return {"native": "array", "doc": "array<string,\\" + NS + "\\" + m["model"] + ">",
                    "kind": "model_map", "model": m["model"], "nullable": nullable}
        return {"native": "array", "doc": "array<string," + m["doc"] + ">",
                "kind": "map", "elem": m, "nullable": nullable}

    # scalars / specials
    if base in GO_SCALARS:
        native, doc = GO_SCALARS[base]
        return {"native": native, "doc": doc, "kind": "scalar", "nullable": nullable or True}
    if base in GO_SPECIAL:
        native, doc, note = GO_SPECIAL[base]
        if note:
            fallbacks.append(note)
        return {"native": native, "doc": doc, "kind": "mixed", "nullable": True}
    if base == "FormFileInfo":
        fallbacks.append(FORM_FILE_NOTE)
        return {"native": None, "doc": "mixed", "kind": "mixed", "nullable": True}

    # model package references
    if base in enum_names:
        # enums are final string-const classes in PHP; store raw string
        return {"native": "string", "doc": "\\" + NS + "\\" + base,
                "kind": "scalar", "nullable": nullable}
    if base in struct_names:
        return {"native": "\\" + NS + "\\" + base, "doc": "\\" + NS + "\\" + base,
                "kind": "model", "model": base, "nullable": nullable}

    raise UnknownType(go_type)


# ---------------------------------------------------------------------------
# Go file parsing
# ---------------------------------------------------------------------------

FIELD_RE = re.compile(
    r'^\s*(?P<name>[A-Za-z_][A-Za-z0-9_]*)\s+(?P<type>\S.*?)\s+`json:"(?P<tag>[^"]+)"`'
)
ENUM_CONST_RE = re.compile(
    r'^\s*(?P<name>[^\W\d]\w*)\s+(?P<typ>[^\W\d]\w*)\s*=\s*(?P<val>.+?)\s*$'
)
# Go identifiers may contain Unicode letters; PHP class constants accept the
# same bytes, so the upstream constant name is kept verbatim.
TYPE_STRING_RE = re.compile(r"^type\s+([A-Za-z_][A-Za-z0-9_]*)\s+(\S+)\s*$")
TYPE_STRUCT_RE = re.compile(r"^type\s+([A-Za-z_][A-Za-z0-9_]*)\s+struct\s*\{")


def parse_go_file(path):
    """Return {'kind': 'struct'|'enum', 'name':..., ...}"""
    with open(path, "r", encoding="utf-8") as f:
        lines = f.read().splitlines()

    decl = None
    for i, line in enumerate(lines):
        m = TYPE_STRUCT_RE.match(line)
        if m:
            decl = ("struct", m.group(1), i)
            break
        m = TYPE_STRING_RE.match(line)
        if m and m.group(2) != "struct":
            decl = ("alias", m.group(1), i, m.group(2))
            break
    if decl is None:
        raise ValueError("no type declaration found")

    if decl[0] == "struct":
        name = decl[1]
        fields = []
        pending_comments = []
        for line in lines[decl[2] + 1:]:
            if line.startswith("}"):
                break
            stripped = line.strip()
            if stripped.startswith("//"):
                pending_comments.append(stripped[2:].strip())
                continue
            if not stripped:
                pending_comments = []
                continue
            m = FIELD_RE.match(line)
            if not m:
                if stripped:
                    raise ValueError("unparsed struct line: %r" % stripped)
                continue
            tag = m.group("tag")
            json_name = tag.split(",")[0]
            comment = " ".join(c for c in pending_comments if c).strip()
            fields.append({
                "go_name": m.group("name"),
                "go_type": m.group("type").strip(),
                "json_name": json_name,
                "omitempty": "omitempty" in tag.split(","),
                "comment": comment,
            })
            pending_comments = []
        return {"kind": "struct", "name": name, "fields": fields}

    # alias (string / int64 / ... backed, possibly with const block)
    name, backing = decl[1], decl[3]
    if backing not in ("string", "int64", "int32", "int", "float64", "float32", "bool"):
        raise ValueError("unsupported alias backing type: %s" % backing)
    consts = []
    in_const_block = False
    for line in lines[decl[2] + 1:]:
        stripped = line.strip()
        if stripped.startswith("const ("):
            in_const_block = True
            continue
        if in_const_block:
            if stripped.startswith(")"):
                break
            m = ENUM_CONST_RE.match(line)
            if m and m.group("typ") == name:
                val = m.group("val")
                consts.append({"name": m.group("name"), "raw_value": val})
    return {"kind": "enum", "name": name, "backing": backing, "consts": consts}


# ---------------------------------------------------------------------------
# PHP emission
# ---------------------------------------------------------------------------


def php_doc_type(m):
    return m["doc"]


def php_native(m):
    # everything is nullable in the generated DTOs; mixed is untyped
    if m["native"] is None:
        return None
    return "?" + m["native"]


def lcfirst(s):
    return s[0].lower() + s[1:]


def esc_php_string(s):
    return s.replace("\\", "\\\\").replace("'", "\\'")


def esc_doc(s):
    # collapse newlines, neutralize docblock termination, and undo the
    # double-escaped "\\n" residue that openapi-generator leaves in Go comments
    return s.replace("\\\\n", "\\n").replace("*/", "* /").replace("\n", " ").strip()


def emit_struct(model, struct_names, enum_names, fallbacks):
    name = model["name"]
    out = []
    out.append("<?php")
    out.append("")
    out.append("declare(strict_types=1);")
    out.append("")
    out.append("namespace %s;" % NS)
    out.append("")
    out.append("class %s implements \\JsonSerializable" % name)
    out.append("{")
    mapped = []
    for f in model["fields"]:
        m = map_go_type(f["go_type"], struct_names, enum_names, fallbacks)
        f = dict(f)
        f["map"] = m
        mapped.append(f)

    # properties
    for f in mapped:
        m = f["map"]
        doc_lines = []
        if f["comment"]:
            doc_lines.append(esc_doc(f["comment"]))
        doc_lines.append("@var %s" % php_doc_type(m))
        out.append("    /**")
        for dl in doc_lines:
            out.append("     * %s" % dl)
        out.append("     */")
        native = php_native(m)
        prop = lcfirst(f["go_name"])
        if native:
            out.append("    protected %s $%s = null;" % (native, prop))
        else:
            out.append("    protected $%s = null;" % prop)
        out.append("")

    # getters / setters
    for f in mapped:
        m = f["map"]
        prop = lcfirst(f["go_name"])
        base = f["go_name"]
        native = php_native(m)
        doc = php_doc_type(m)
        out.append("    /**")
        if f["comment"]:
            out.append("     * %s" % esc_doc(f["comment"]))
        out.append("     * @return %s" % doc)
        out.append("     */")
        if native:
            out.append("    public function get%s(): %s" % (base, native))
        else:
            out.append("    public function get%s()" % base)
        out.append("    {")
        out.append("        return $this->%s;" % prop)
        out.append("    }")
        out.append("")
        out.append("    /**")
        if f["comment"]:
            out.append("     * %s" % esc_doc(f["comment"]))
        out.append("     * @param %s $%s" % (doc, prop))
        out.append("     * @return self")
        out.append("     */")
        if native:
            out.append("    public function set%s(%s $%s): self" % (base, native, prop))
        else:
            out.append("    public function set%s($%s): self" % (base, prop))
        out.append("    {")
        out.append("        $this->%s = $%s;" % (prop, prop))
        out.append("        return $this;")
        out.append("    }")
        out.append("")

    # jsonSerialize
    out.append("    /**")
    out.append("     * @return array<string,mixed>")
    out.append("     */")
    out.append("    #[\\ReturnTypeWillChange]")
    out.append("    public function jsonSerialize(): array")
    out.append("    {")
    out.append("        $result = [];")
    for f in mapped:
        prop = lcfirst(f["go_name"])
        out.append("        if ($this->%s !== null) {" % prop)
        out.append("            $result['%s'] = $this->%s;" % (f["json_name"], prop))
        out.append("        }")
    out.append("        return $result;")
    out.append("    }")
    out.append("")

    # fromArray
    out.append("    public static function fromArray(array $data): self")
    out.append("    {")
    out.append("        $obj = new self();")
    for f in mapped:
        m = f["map"]
        prop = lcfirst(f["go_name"])
        json_name = f["json_name"]
        kind = m["kind"]
        # model/array-ish kinds require an array payload; skip (keep null)
        # rather than blow up with a TypeError on malformed data
        needs_array = kind in ("model", "model_array", "model_map", "array", "map")
        guard = " !== null && is_array($v)" if needs_array else " !== null"
        out.append("        if (($v = $data['%s'] ?? null)%s) {" % (json_name, guard))
        if kind == "scalar":
            native = m["native"] or "string"
            if native == "int":
                expr = "(int) $v"
            elif native == "float":
                expr = "(float) $v"
            elif native == "bool":
                expr = "(bool) $v"
            else:
                expr = "(string) $v"
            out.append("            $obj->%s = %s;" % (prop, expr))
        elif kind == "model":
            out.append("            $obj->%s = \\%s\\%s::fromArray($v);" % (prop, NS, m["model"]))
        elif kind == "model_array":
            out.append("            $obj->%s = array_map(fn ($vv) => \\%s\\%s::fromArray($vv), $v);" % (prop, NS, m["model"]))
        elif kind == "model_map":
            out.append("            $obj->%s = array_map(fn ($vv) => \\%s\\%s::fromArray($vv), $v);" % (prop, NS, m["model"]))
        elif kind in ("array", "map"):
            out.append("            $obj->%s = $v;" % prop)
        else:  # mixed
            out.append("            $obj->%s = $v;" % prop)
        out.append("        }")
    out.append("        return $obj;")
    out.append("    }")
    out.append("}")
    out.append("")
    return "\n".join(out)


def emit_enum(model):
    name = model["name"]
    backing = model["backing"]
    out = []
    out.append("<?php")
    out.append("")
    out.append("declare(strict_types=1);")
    out.append("")
    out.append("namespace %s;" % NS)
    out.append("")
    out.append("final class %s" % name)
    out.append("{")
    is_string = backing == "string"
    for c in model["consts"]:
        raw = c["raw_value"]
        if is_string:
            mm = re.match(r'^"(.*)"$', raw)
            if not mm:
                raise ValueError("bad enum string value: %r" % raw)
            val = "'" + esc_php_string(mm.group(1)) + "'"
        else:
            if not re.match(r"^-?\d+(\.\d+)?$", raw):
                raise ValueError("bad enum numeric value: %r" % raw)
            val = raw
        out.append("    public const %s = %s;" % (c["name"], val))
    out.append("")
    out.append("    public const ALLOWED_VALUES = [")
    for c in model["consts"]:
        out.append("        self::%s," % c["name"])
    out.append("    ];")
    out.append("")
    # numeric-backed enums accept int|string input and normalize to string,
    # because decoded JSON scalars arrive as int while query params arrive
    # as strings
    value_type = "string" if is_string else "int|string"
    out.append("    public static function isValid(%s $value): bool" % value_type)
    out.append("    {")
    if is_string:
        out.append("        return in_array($value, self::ALLOWED_VALUES, true);")
    else:
        out.append("        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);")
    out.append("    }")
    out.append("")
    out.append("    public static function fromValue(%s $value): string" % value_type)
    out.append("    {")
    out.append("        if (!self::isValid($value)) {")
    out.append("            throw new \\InvalidArgumentException(sprintf('Invalid value %%s for enum %s', $value));" % name)
    out.append("        }")
    out.append("        return (string) $value;")
    out.append("    }")
    out.append("}")
    out.append("")
    return "\n".join(out)


# ---------------------------------------------------------------------------
# main
# ---------------------------------------------------------------------------


def main(argv=None):
    opts = common.parse_common_args(argv)
    go_models_dir = os.path.join(opts["upstream"], "models")
    php_models_dir = os.path.join(opts["out"], "src", "Models")

    go_files = sorted(glob.glob(os.path.join(go_models_dir, "model_*.go")))
    if not go_files:
        print("no Go model files found", file=sys.stderr)
        sys.exit(1)

    # pass 1: collect struct/enum names for cross-reference
    struct_names = set()
    enum_names = set()
    parsed = []
    failures = []
    for path in go_files:
        try:
            model = parse_go_file(path)
            parsed.append((path, model))
            if model["kind"] == "struct":
                struct_names.add(model["name"])
            else:
                enum_names.add(model["name"])
        except Exception as e:  # noqa: BLE001 - record all parse failures
            failures.append((path, "parse: %s" % e))

    # class-name uniqueness assertion
    seen = {}
    dupes = []
    for _, model in parsed:
        n = model["name"]
        if n in seen:
            dupes.append(n)
        seen[n] = True
    if dupes:
        print("duplicate class names: %s" % ", ".join(sorted(set(dupes))), file=sys.stderr)
        sys.exit(1)

    os.makedirs(php_models_dir, exist_ok=True)

    fallbacks = []
    generated = 0
    for path, model in parsed:
        rel = os.path.basename(path)
        try:
            if model["kind"] == "struct":
                code = emit_struct(model, struct_names, enum_names, fallbacks)
            else:
                code = emit_enum(model)
            out_path = os.path.join(php_models_dir, model["name"] + ".php")
            with open(out_path, "w", encoding="utf-8") as f:
                f.write(code)
            generated += 1
        except Exception as e:  # noqa: BLE001
            failures.append((path, "emit: %s" % e))

    # also purge stale php files for classes no longer generated
    expected = {m["name"] + ".php" for _, m in parsed}
    for extra in glob.glob(os.path.join(php_models_dir, "*.php")):
        if os.path.basename(extra) not in expected:
            os.remove(extra)

    with open(FAILURES_LOG, "w", encoding="utf-8") as f:
        for path, reason in failures:
            f.write("%s\t%s\n" % (os.path.basename(path), reason))

    sync_meta.sync_metadata(argv)

    print("total=%d structs=%d enums=%d generated=%d failures=%d"
          % (len(go_files),
             sum(1 for _, m in parsed if m["kind"] == "struct"),
             sum(1 for _, m in parsed if m["kind"] == "enum"),
             generated, len(failures)))
    if fallbacks:
        uniq = sorted(set(fallbacks))
        print("fallbacks (%d distinct):" % len(uniq))
        for fb in uniq:
            print("  - %s (x%d)" % (fb, fallbacks.count(fb)))
    if failures:
        sys.exit(2)


if __name__ == "__main__":
    main()
