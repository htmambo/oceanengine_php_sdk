#!/usr/bin/env python3
"""Consistency checker between the upstream Go SDK and the generated PHP SDK.

Usage::

    python3 tools/go2php/parity.py [--upstream PATH] [--out PATH]

Both paths are resolved by common.py: the command line wins, then the
``OCEANENGINE_UPSTREAM`` / ``OCEANENGINE_OUT`` environment variables, then the
default layout (the Go checkout sits next to this package).

Checks (each one prints ``PASS`` or ``FAIL``):

1. model coverage      every Go ``type X`` in ``models/*.go`` has
                        ``<out>/src/Models/X.php`` (the 10 helper types of
                        ``models/utils.go`` are exempt)
2. enum values         the Go const value set of an enum file equals the
                        value set behind the ``ALLOWED_VALUES`` list of the
                        generated PHP class
3. api coverage        every Go ``api/api_*.go`` has its ``*ApiService`` class
4. client getters      the number of ``*Api()`` getters in ``src/Client.php``
                        equals the number of Go client getters
5. version             ``src/Version.php`` matches the Go ``config/configuration.go``
6. dangling references every ``\\Oceanengine\\Models\\X`` used in ``src/Api``
                        resolves to an existing model class
7. php orphans         every class in ``src/Models`` exists on the Go side
                        (stale artefacts from an earlier sync)

Exit code is 0 when every check passes, 1 otherwise.
"""

import os
import re
import sys

TOOLS_DIR = os.path.dirname(os.path.abspath(__file__))
if TOOLS_DIR not in sys.path:
    sys.path.insert(0, TOOLS_DIR)

import common  # noqa: E402

# Helper types declared in models/utils.go; they are not JSON models and have
# no counterpart in src/Models (FormFileInfo lives in src/FormFileInfo.php).
UTILS_TYPES = {
    "NullableBool",
    "NullableInt",
    "NullableInt32",
    "NullableInt64",
    "NullableFloat32",
    "NullableFloat64",
    "NullableString",
    "NullableTime",
    "MappedNullable",
    "FormFileInfo",
}

RE_GO_TYPE_STRUCT = re.compile(r"^type\s+([A-Za-z_]\w*)\s+struct\s*\{")
RE_GO_TYPE_ALIAS = re.compile(r"^type\s+([A-Za-z_]\w*)\s+(\S+)\s*$")
RE_GO_CONST = re.compile(
    r"^\s*(?P<name>\S+)\s+(?P<typ>\S+)\s*=\s*(?P<val>.+?)\s*$"
)
RE_GO_SERVICE = re.compile(r"^type\s+(\w+ApiService)\s+service", re.M)
RE_GO_GETTER = re.compile(r"^func \(c \*Client\) \w+\(\) \*api\.\w+", re.M)
RE_PHP_CLASS = re.compile(r"^(?:final\s+|abstract\s+)?class\s+([A-Za-z_]\w*)", re.M)
RE_PHP_GETTER = re.compile(r"^\s+public function \w+Api\(\):", re.M)
RE_PHP_ALLOWED = re.compile(
    r"public const ALLOWED_VALUES = \[(.*?)\];", re.S
)
RE_PHP_CONST = re.compile(r"public const ([A-Za-z_]\w*) = (.+?);")
RE_PHP_SELF_CONST = re.compile(r"self::(\w+)")
RE_PHP_MODEL_REF = re.compile(r"\\Oceanengine\\Models\\([A-Za-z_]\w*)")
RE_PHP_VERSION = re.compile(r"public const VERSION = '([^']*)'")


class Check(object):
    """One parity check and its outcome."""

    def __init__(self, name):
        self.name = name
        self.ok = True
        self.messages = []
        self.notes = []

    def fail(self, message):
        self.ok = False
        self.messages.append(message)

    def note(self, message):
        self.notes.append(message)

    def report(self):
        status = "PASS" if self.ok else "FAIL"
        print("[%s] %s" % (status, self.name))
        for message in self.messages:
            print("       - %s" % message)
        for message in self.notes:
            print("       i %s" % message)
        return self.ok


def _read(path):
    with open(path, "r", encoding="utf-8") as fh:
        return fh.read()


def go_model_types(go_models_dir):
    """Map every Go model type name to the file declaring it."""
    types = {}
    if not os.path.isdir(go_models_dir):
        return types
    for fname in sorted(os.listdir(go_models_dir)):
        if not fname.endswith(".go"):
            continue
        path = os.path.join(go_models_dir, fname)
        for name in re.findall(r"^type\s+([A-Za-z_]\w*)", _read(path), re.M):
            types.setdefault(name, fname)
    return types


def _literal_value(raw):
    """Normalise a Go/PHP literal to the string used for comparison."""
    value = raw.strip()
    if len(value) >= 2 and value[0] == value[-1] and value[0] in ("'", '"'):
        return value[1:-1]
    return value


def go_enum_consts(go_models_dir):
    """Map Go enum type name -> the set of its constant values."""
    enums = {}
    if not os.path.isdir(go_models_dir):
        return enums
    for fname in sorted(os.listdir(go_models_dir)):
        if not fname.endswith(".go"):
            continue
        lines = _read(os.path.join(go_models_dir, fname)).splitlines()
        decl = None
        for i, line in enumerate(lines):
            if RE_GO_TYPE_STRUCT.match(line):
                decl = None
                break
            m = RE_GO_TYPE_ALIAS.match(line)
            if m:
                decl = (m.group(1), i)
                break
        if decl is None:
            continue
        name = decl[0]
        values = set()
        in_block = False
        for line in lines[decl[1] + 1:]:
            stripped = line.strip()
            if stripped.startswith("const ("):
                in_block = True
                continue
            if in_block:
                if stripped.startswith(")"):
                    break
                m = RE_GO_CONST.match(line)
                if m and m.group("typ") == name:
                    values.add(_literal_value(m.group("val")))
        if values:
            enums[name] = values
    return enums


def php_model_files(php_models_dir):
    """Set of PHP model class names, taken from the file names."""
    names = set()
    if not os.path.isdir(php_models_dir):
        return names
    for fname in os.listdir(php_models_dir):
        if fname.endswith(".php"):
            names.add(fname[:-4])
    return names


def php_model_classes(php_models_dir):
    """Map PHP model class name -> file path."""
    classes = {}
    if not os.path.isdir(php_models_dir):
        return classes
    for fname in sorted(os.listdir(php_models_dir)):
        if not fname.endswith(".php"):
            continue
        path = os.path.join(php_models_dir, fname)
        m = RE_PHP_CLASS.search(_read(path))
        if m:
            classes.setdefault(m.group(1), path)
    return classes


def php_const_values(path):
    """Map PHP class constant name -> its literal value."""
    values = {}
    for name, raw in RE_PHP_CONST.findall(_read(path)):
        values[name] = _literal_value(raw)
    return values


def php_allowed_values(path):
    """Value set behind the PHP class ALLOWED_VALUES list."""
    m = RE_PHP_ALLOWED.search(_read(path))
    if not m:
        return None
    consts = php_const_values(path)
    return set(
        consts.get(name, name) for name in RE_PHP_SELF_CONST.findall(m.group(1))
    )


def check_model_coverage(go_types, php_files, php_classes, check):
    missing = []
    for name in sorted(go_types):
        if name in UTILS_TYPES:
            continue
        if name not in php_files:
            missing.append("%s (go: %s)" % (name, go_types[name]))
            continue
        if name not in php_classes:
            missing.append("%s: file does not declare the class" % name)
    if missing:
        check.fail("missing PHP model class: %s" % ", ".join(missing))


def check_enum_values(go_enums, php_classes, check):
    mismatched = []
    for name in sorted(go_enums):
        path = php_classes.get(name)
        if path is None:
            mismatched.append("%s: no PHP class" % name)
            continue
        allowed = php_allowed_values(path)
        if allowed is None:
            mismatched.append("%s: no ALLOWED_VALUES in PHP class" % name)
            continue
        go_values = go_enums[name]
        if allowed != go_values:
            only_go = sorted(go_values - allowed)
            only_php = sorted(allowed - go_values)
            mismatched.append(
                "%s: only in Go %s / only in PHP %s"
                % (name, only_go or "-", only_php or "-")
            )
    if mismatched:
        check.fail("enum value mismatch: %s" % "; ".join(mismatched))


def check_api_coverage(go_api_dir, php_api_dir, check):
    missing = []
    services = 0
    if os.path.isdir(go_api_dir):
        for fname in sorted(os.listdir(go_api_dir)):
            if not (fname.startswith("api_") and fname.endswith(".go")):
                continue
            for service in RE_GO_SERVICE.findall(_read(os.path.join(go_api_dir, fname))):
                services += 1
                if not os.path.isfile(os.path.join(php_api_dir, service + ".php")):
                    missing.append("%s -> %s.php" % (fname, service))
    if missing:
        check.fail("missing PHP api service: %s" % ", ".join(missing))


def check_client_getters(go_client, php_client, check):
    go_count = len(RE_GO_GETTER.findall(_read(go_client))) if os.path.isfile(go_client) else 0
    php_count = len(RE_PHP_GETTER.findall(_read(php_client))) if os.path.isfile(php_client) else 0
    if go_count != php_count:
        check.fail("getter count mismatch: Go %d, PHP %d" % (go_count, php_count))


def check_version(go_config, php_version, check):
    if not os.path.isfile(go_config):
        check.fail("upstream config not found: %s" % go_config)
        return
    m = common.RE_VERSION.search(_read(go_config))
    go_version = m.group(1) if m else None
    if not os.path.isfile(php_version):
        check.fail("missing %s" % php_version)
        return
    m = RE_PHP_VERSION.search(_read(php_version))
    php_version_value = m.group(1) if m else None
    if go_version is None:
        check.fail("cannot parse Version from %s" % go_config)
        return
    if php_version_value != go_version:
        check.fail(
            "version mismatch: Go %s, PHP %s"
            % (go_version, php_version_value)
        )


def check_dangling_refs(php_api_dir, php_classes, check):
    dangling = []
    refs = 0
    if os.path.isdir(php_api_dir):
        for fname in sorted(os.listdir(php_api_dir)):
            if not fname.endswith(".php"):
                continue
            path = os.path.join(php_api_dir, fname)
            for name in set(RE_PHP_MODEL_REF.findall(_read(path))):
                refs += 1
                if name not in php_classes:
                    dangling.append("%s -> %s" % (fname, name))
    if dangling:
        check.fail("dangling model reference: %s" % ", ".join(sorted(dangling)))


def check_php_orphans(go_types, php_files, check):
    orphans = []
    for name in sorted(php_files):
        if name in UTILS_TYPES:
            continue
        if name not in go_types:
            orphans.append(name)
    if orphans:
        check.fail("stale PHP model classes: %s" % ", ".join(orphans))


def main(argv=None):
    opts = common.parse_common_args(argv)
    upstream = opts["upstream"]
    out = opts["out"]

    go_models_dir = os.path.join(upstream, "models")
    go_api_dir = os.path.join(upstream, "api")
    go_client = os.path.join(upstream, "client.go")
    go_config = os.path.join(upstream, "config", "configuration.go")
    php_models_dir = os.path.join(out, "src", "Models")
    php_api_dir = os.path.join(out, "src", "Api")
    php_client = os.path.join(out, "src", "Client.php")
    php_version = os.path.join(out, "src", "Version.php")

    go_types = go_model_types(go_models_dir)
    go_enums = go_enum_consts(go_models_dir)
    php_files = php_model_files(php_models_dir)
    php_classes = php_model_classes(php_models_dir)

    checks = []

    check = Check("model coverage (Go models/*.go -> src/Models/*.php)")
    check_model_coverage(go_types, php_files, php_classes, check)
    checks.append(check)

    check = Check("enum values (Go const set == PHP ALLOWED_VALUES)")
    check_enum_values(go_enums, php_classes, check)
    checks.append(check)

    check = Check("api coverage (Go api/api_*.go -> src/Api/*ApiService.php)")
    check_api_coverage(go_api_dir, php_api_dir, check)
    checks.append(check)

    check = Check("client getters (Go client.go == src/Client.php)")
    check_client_getters(go_client, php_client, check)
    checks.append(check)

    check = Check("version (src/Version.php == Go config/configuration.go)")
    check_version(go_config, php_version, check)
    checks.append(check)

    check = Check("dangling references (src/Api -> src/Models)")
    check_dangling_refs(php_api_dir, php_classes, check)
    checks.append(check)

    check = Check("php orphans (src/Models without Go counterpart)")
    check_php_orphans(go_types, php_files, check)
    checks.append(check)

    passed = 0
    failed = 0
    print("parity: upstream=%s out=%s" % (upstream, out))
    for check in checks:
        if check.report():
            passed += 1
        else:
            failed += 1

    print("summary: %d passed, %d failed" % (passed, failed))
    return 1 if failed else 0


if __name__ == "__main__":
    sys.exit(main())
