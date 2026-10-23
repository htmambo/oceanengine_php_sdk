#!/usr/bin/env python3
"""One-command upstream sync for the PHP SDK.

Pulls the official Go SDK, regenerates the PHP sources from it, verifies the
result (parity / syntax / smoke tests) and records the change in CHANGELOG.md.

Usage::

    python3 tools/go2php/sync.py [--upstream PATH] [--out PATH] [--no-fetch]
                                 [--check] [--skip-tests] [--force]

    --upstream PATH   upstream Go checkout (default: ../ad_open_sdk_go)
    --out PATH        PHP package root to regenerate (default: this package)
    --no-fetch        do not pull the upstream repository
    --check           read-only mode: report a pending upstream update and
                      run the verifications without touching any file
    --skip-tests      skip the smoke tests
    --force           continue even when the upstream worktree is dirty

The default flow is: preflight -> fetch -> snapshot -> generate -> parity ->
lint -> test -> report.

Exit codes::

    0   success (or: --check found nothing to sync)
    1   failure (generation, parity, syntax or tests failed)
    2   --check only: the upstream has a pending update
"""

import argparse
import datetime
import hashlib
import os
import re
import shutil
import subprocess
import sys
import tempfile

TOOLS_DIR = os.path.dirname(os.path.abspath(__file__))
if TOOLS_DIR not in sys.path:
    sys.path.insert(0, TOOLS_DIR)

import common  # noqa: E402

STEP_TOTAL = 8

# group label -> (path relative to the package root, "dir" or "file")
GROUPS = [
    ("src/Models", "dir"),
    ("src/Api", "dir"),
    ("src/Client.php", "file"),
    ("src/Version.php", "file"),
    ("composer.json", "file"),
]

CHANGELOG_NAME = "CHANGELOG.md"

LINT_DRIVER = """<?php
$errors = 0;
foreach (file($argv[1], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $file) {
    try {
        token_get_all(file_get_contents($file), TOKEN_PARSE);
    } catch (Throwable $e) {
        $errors++;
        echo $file, "\\n";
    }
}
exit($errors > 0 ? 1 : 0);
"""


class SyncError(Exception):
    """A fatal problem that aborts the sync."""


# ---------------------------------------------------------------------------
# small helpers
# ---------------------------------------------------------------------------


DEFAULT_TIMEOUT = 900


def _run(cmd, cwd=None, timeout=DEFAULT_TIMEOUT):
    """Run a command, returning (exit code, combined output)."""
    try:
        proc = subprocess.run(
            cmd,
            cwd=cwd,
            stdout=subprocess.PIPE,
            stderr=subprocess.STDOUT,
            timeout=timeout,
        )
    except subprocess.TimeoutExpired as exc:
        output = exc.stdout or b""
        if isinstance(output, str):
            output = output.encode("utf-8", "replace")
        return 124, "命令超时（%ds）：%s\n%s" % (
            timeout,
            " ".join(cmd),
            output.decode("utf-8", "replace"),
        )
    return proc.returncode, proc.stdout.decode("utf-8", "replace")


def _md5(path):
    with open(path, "rb") as fh:
        return hashlib.md5(fh.read()).hexdigest()


def _step(number, message):
    print("[%d/%d] %s" % (number, STEP_TOTAL, message), flush=True)


def _detail(message):
    print("       %s" % message, flush=True)


def _version_tuple(version):
    parts = re.findall(r"\d+", version or "")
    return tuple(int(p) for p in parts) or (0,)


# ---------------------------------------------------------------------------
# steps
# ---------------------------------------------------------------------------


SDK_SOURCE_PATHS = (
    "models/",
    "api/",
    "config/",
    "middleware/",
    "client.go",
    "go.mod",
    "go.sum",
)


def _is_sdk_source(path):
    """Only SDK sources block a sync; local tooling tweaks (.gitignore, .omc) do not."""
    path = path.strip()
    for prefix in SDK_SOURCE_PATHS:
        if path == prefix or path.startswith(prefix):
            return True
    return False


def preflight(upstream, force, will_fetch):
    """Check the upstream checkout before touching it."""
    if not os.path.isdir(upstream):
        raise SyncError("上游目录不存在：%s" % upstream)
    rc, _ = _run(["git", "-C", upstream, "rev-parse", "--git-dir"])
    if rc != 0:
        raise SyncError("上游目录不是 git 仓库：%s" % upstream)

    # -z keeps the parsing exact: paths are NUL-separated and never quoted,
    # and untracked files are included (the translators read the worktree).
    rc, output = _run(
        ["git", "-C", upstream, "status", "--porcelain", "-z", "--untracked-files=all"]
    )
    changed = []
    for entry in output.split("\0"):
        entry = entry.strip()
        if not entry:
            continue
        # "XY <path>"; for renames the original path follows as another entry.
        changed.append(entry[3:] if len(entry) > 3 else entry)
    if not changed:
        _detail("上游工作区干净")
        return

    dirty = [line for line in changed if _is_sdk_source(line[3:])]
    ignored = len(changed) - len(dirty)
    if ignored:
        _detail("上游有 %s 处非 SDK 源码改动（已忽略）" % ignored)
    if not dirty:
        _detail("上游 SDK 源码未修改，可安全同步")
        return
    listing = "\n".join("         %s" % line for line in dirty[:20])
    if will_fetch and not force:
        raise SyncError(
            "上游 SDK 源码存在未提交修改，已中止（用 --force 可跳过该检查）：\n%s" % listing
        )
    _detail("上游 SDK 源码有未提交修改（%s），本次不修改上游，继续" % len(dirty))
    _detail(listing)


def fetch_upstream(upstream):
    """Fetch and fast-forward the upstream checkout."""
    rc, output = _run(["git", "-C", upstream, "fetch", "--tags", "origin"])
    if rc != 0:
        raise SyncError("git fetch --tags origin 失败：\n%s" % output.strip())
    # Re-check the worktree right before the pull: between preflight and here
    # somebody may have edited the SDK sources.
    rc, output = _run(
        ["git", "-C", upstream, "status", "--porcelain", "-z", "--untracked-files=all"]
    )
    changed = [
        entry[3:] if len(entry) > 3 else entry
        for entry in output.split("\0")
        if entry.strip()
    ]
    dirty = [path for path in changed if _is_sdk_source(path)]
    if dirty:
        raise SyncError(
            "上游 SDK 源码存在未提交修改，已中止：\n%s"
            % "\n".join("         %s" % path for path in dirty[:20])
        )
    rc, output = _run(["git", "-C", upstream, "pull", "--ff-only"])
    if rc != 0:
        raise SyncError(
            "git pull --ff-only 失败（上游可能有本地提交或冲突）：\n%s" % output.strip()
        )


def take_snapshot(out_root):
    """Copy the generated artefacts aside so the diff can be reported."""
    tmp = tempfile.mkdtemp(prefix="oceanengine-sync-")
    snapshot = {}
    for label, kind in GROUPS:
        source = os.path.join(out_root, label)
        files = {}
        if kind == "dir":
            if os.path.isdir(source):
                for name in sorted(os.listdir(source)):
                    path = os.path.join(source, name)
                    if os.path.isfile(path):
                        files[name] = _md5(path)
        elif os.path.isfile(source):
            files[label] = _md5(source)
        snapshot[label] = files
    return tmp, snapshot


def generate(upstream, out_root):
    """Run the three translators in order."""
    for script in ("models.py", "api.py", "client.py"):
        path = os.path.join(TOOLS_DIR, script)
        rc, output = _run(
            [sys.executable, path, "--upstream", upstream, "--out", out_root]
        )
        if rc != 0:
            raise SyncError(
                "生成器 %s 失败（退出码 %d）：\n%s" % (script, rc, output.strip())
            )
        _detail("%s 完成" % script)


def check_failure_logs():
    """The translators record untranslatable files; any entry is fatal."""
    problems = []
    for name in ("models_failures.log", "api_failures.log"):
        path = os.path.join(TOOLS_DIR, name)
        if not os.path.isfile(path):
            continue
        with open(path, "r", encoding="utf-8") as fh:
            content = fh.read().strip()
        if content:
            problems.append((name, content))
    if problems:
        detail = []
        for name, content in problems:
            detail.append("== %s ==" % name)
            detail.append(content)
        raise SyncError(
            "转译器记录了失败条目（上游引入了生成器尚不认识的模式，"
            "需要扩展 tools/go2php/models.py 或 api.py 后重试）：\n%s"
            % "\n".join(detail)
        )


def run_parity(upstream, out_root):
    rc, output = _run(
        [
            sys.executable,
            os.path.join(TOOLS_DIR, "parity.py"),
            "--upstream",
            upstream,
            "--out",
            out_root,
        ]
    )
    if rc != 0:
        raise SyncError("parity 校验未通过：\n%s" % output.strip())
    return output


def php_files(out_root):
    """Every PHP file of src/ and tests/."""
    found = []
    for sub in ("src", "tests"):
        base = os.path.join(out_root, sub)
        if not os.path.isdir(base):
            continue
        for root, _dirs, names in os.walk(base):
            for name in names:
                if name.endswith(".php"):
                    found.append(os.path.join(root, name))
    return sorted(found)


def run_lint(out_root):
    """Syntax-check every PHP file of the package."""
    files = php_files(out_root)
    if not files:
        raise SyncError("没有找到需要检查的 PHP 文件")
    tmp = tempfile.mkdtemp(prefix="oceanengine-lint-")
    driver = os.path.join(tmp, "lint.php")
    listing = os.path.join(tmp, "files.txt")
    try:
        with open(driver, "w", encoding="utf-8") as fh:
            fh.write(LINT_DRIVER)
        with open(listing, "w", encoding="utf-8") as fh:
            fh.write("\n".join(files) + "\n")
        rc, output = _run(["php", driver, listing])
        broken = [line for line in output.splitlines() if line.strip()]
        if rc != 0 or broken:
            messages = []
            for path in broken:
                _rc, detail = _run(["php", "-l", path])
                messages.append(detail.strip())
            raise SyncError(
                "php -l 发现 %d 个文件存在语法错误：\n%s"
                % (len(broken), "\n".join(messages))
            )
    finally:
        shutil.rmtree(tmp, ignore_errors=True)
    return len(files)


def run_tests(out_root):
    """Run the two smoke test suites."""
    for name in ("smoke.php", "_core_smoke.php"):
        path = os.path.join(out_root, "tests", name)
        if not os.path.isfile(path):
            raise SyncError("找不到测试文件：%s" % path)
        rc, output = _run(["php", path])
        if rc != 0:
            raise SyncError("测试 %s 失败（退出码 %d）：\n%s" % (name, rc, output.strip()))
        _detail("%s 通过" % name)


def compare(snapshot, out_root):
    """Diff the snapshot against the regenerated artefacts."""
    stats = {}
    details = {}
    for label, kind in GROUPS:
        before = snapshot.get(label, {})
        after = {}
        source = os.path.join(out_root, label)
        if kind == "dir":
            if os.path.isdir(source):
                for name in sorted(os.listdir(source)):
                    path = os.path.join(source, name)
                    if os.path.isfile(path):
                        after[name] = _md5(path)
        elif os.path.isfile(source):
            after[label] = _md5(source)
        added = sorted(set(after) - set(before))
        deleted = sorted(set(before) - set(after))
        modified = sorted(
            name for name in set(after) & set(before) if after[name] != before[name]
        )
        stats[label] = {
            "added": len(added),
            "modified": len(modified),
            "deleted": len(deleted),
        }
        details[label] = {
            "added": added,
            "modified": modified,
            "deleted": deleted,
        }
    return stats, details


# ---------------------------------------------------------------------------
# changelog
# ---------------------------------------------------------------------------


def _read_version_php(out_root):
    path = os.path.join(out_root, "src", "Version.php")
    values = {}
    if not os.path.isfile(path):
        return values
    with open(path, "r", encoding="utf-8") as fh:
        content = fh.read()
    for name, value in re.findall(r"public const (\w+) = '([^']*)';", content):
        values[name] = value
    return values


def _build_section(version, commit, date, stats, results):
    lines = ["## 上游 v%s (%s)" % (version, commit[:7]), ""]
    lines.append("- 同步日期：%s" % date)
    lines.append("- 上游提交：`%s`" % commit)
    lines.append("")
    lines.append("### 变更统计")
    lines.append("")
    for label, _kind in GROUPS:
        item = stats[label]
        lines.append(
            "- `%s`：新增 %d，修改 %d，删除 %d"
            % (label, item["added"], item["modified"], item["deleted"])
        )
    lines.append("")
    lines.append("### 校验结果")
    lines.append("")
    lines.append("- parity：%s" % results["parity"])
    lines.append("- 语法检查（php -l）：%s" % results["lint"])
    lines.append("- 冒烟测试：%s" % results["tests"])
    lines.append("")
    return "\n".join(lines)


def upsert_changelog(out_root, version, commit, date, stats, results):
    """Insert or refresh the section of the given upstream version."""
    path = os.path.join(out_root, CHANGELOG_NAME)
    section = _build_section(version, commit, date, stats, results)
    heading = "## 上游 v%s" % version

    if not os.path.isfile(path):
        content = "# Changelog\n\n%s\n" % section
        with open(path, "w", encoding="utf-8") as fh:
            fh.write(content)
        return "created"

    with open(path, "r", encoding="utf-8") as fh:
        original = fh.read()

    lines = original.splitlines(keepends=True)
    starts = [i for i, line in enumerate(lines) if line.startswith("## ")]
    target = None
    for pos, start in enumerate(starts):
        # Exact heading match, or the heading plus its " (<commit>)" suffix:
        # "## 上游 v1.2" must not match "## 上游 v1.2.3".
        heading_line = lines[start].rstrip("\r\n")
        if heading_line == heading or heading_line.startswith(heading + " ("):
            target = (start, starts[pos + 1] if pos + 1 < len(starts) else len(lines))
            break

    if target is not None:
        start, end = target
        if lines[start].strip() == ("## 上游 v%s (%s)" % (version, commit[:7])):
            # the very same upstream state is already documented: keep it
            return "kept"
        lines[start:end] = [section + "\n"]
    else:
        insert_at = starts[0] if starts else len(lines)
        block = section + "\n"
        if insert_at and lines[insert_at - 1].strip():
            block = "\n" + block
        lines[insert_at:insert_at] = [block]

    content = "".join(lines)
    if content == original:
        return "unchanged"
    with open(path, "w", encoding="utf-8") as fh:
        fh.write(content)
    return "updated"


# ---------------------------------------------------------------------------
# check mode
# ---------------------------------------------------------------------------


def read_local_version(out_root):
    values = _read_version_php(out_root)
    return values.get("VERSION", "unknown"), values.get("UPSTREAM_COMMIT", "unknown")


def run_check(args, upstream, out_root):
    local_version, local_commit = read_local_version(out_root)
    up_version = common.upstream_version(["--upstream", upstream])
    up_commit = common.upstream_commit(["--upstream", upstream])

    print("[check 1/4] 比较本地版本与上游 HEAD", flush=True)
    _detail("本地：v%s (%s)" % (local_version, local_commit[:7]))
    _detail("上游：v%s (%s)" % (up_version, up_commit[:7]))

    newer = up_commit != local_commit
    newer = newer or _version_tuple(up_version) > _version_tuple(local_version)
    if newer:
        print("")
        print(
            "检测到上游更新：v%s (%s) → v%s (%s)"
            % (local_version, local_commit[:7], up_version, up_commit[:7])
        )
        print(
            "请执行：python3 tools/go2php/sync.py --upstream %s --out %s"
            % (upstream, out_root)
        )
        return 2

    print("[check 2/4] parity 一致性校验", flush=True)
    rc, output = _run(
        [
            sys.executable,
            os.path.join(TOOLS_DIR, "parity.py"),
            "--upstream",
            upstream,
            "--out",
            out_root,
        ]
    )
    if rc != 0:
        print(output, flush=True)
        print("check 失败：parity 未通过", flush=True)
        return 1
    _detail("parity PASS")

    print("[check 3/4] 全量 php -l 语法检查", flush=True)
    try:
        count = run_lint(out_root)
    except SyncError as exc:
        print(str(exc), flush=True)
        return 1
    _detail("%d 个文件，0 错误" % count)

    if args.skip_tests:
        print("[check 4/4] 冒烟测试（已跳过）", flush=True)
    else:
        print("[check 4/4] 冒烟测试", flush=True)
        try:
            run_tests(out_root)
        except SyncError as exc:
            print(str(exc), flush=True)
            return 1

    print("")
    print("check 通过：本地已是最新（v%s），parity / 语法 / 测试全部通过" % local_version)
    return 0


# ---------------------------------------------------------------------------
# main
# ---------------------------------------------------------------------------


def build_parser():
    parser = argparse.ArgumentParser(
        prog="sync.py",
        description="拉取上游 Go SDK → 重新生成 PHP SDK → parity / 语法 / 测试校验 → 变更报告",
    )
    parser.add_argument("--upstream", help="上游 Go SDK 路径（默认 ../ad_open_sdk_go）")
    parser.add_argument("--out", help="PHP 包根路径（默认当前包根）")
    parser.add_argument(
        "--no-fetch", action="store_true", help="不拉取上游（上游已由 CI 自行 checkout）"
    )
    parser.add_argument(
        "--check", action="store_true", help="只读模式：不写任何文件，只校验"
    )
    parser.add_argument("--skip-tests", action="store_true", help="跳过冒烟测试")
    parser.add_argument(
        "--force", action="store_true", help="上游工作区有未提交修改时仍继续"
    )
    return parser


def main(argv=None):
    args = build_parser().parse_args(argv)
    opts = common.parse_common_args(argv)
    upstream = opts["upstream"]
    out_root = opts["out"]

    if args.check:
        return run_check(args, upstream, out_root)

    old_version, _old_commit = read_local_version(out_root)

    _step(1, "前置检查上游仓库")
    try:
        preflight(upstream, args.force, not args.no_fetch)
    except SyncError as exc:
        print("")
        print("同步中止：%s" % exc, file=sys.stderr)
        return 1

    if args.no_fetch:
        _step(2, "拉取上游（已跳过，--no-fetch）")
    else:
        _step(2, "拉取上游仓库")
        try:
            fetch_upstream(upstream)
        except SyncError as exc:
            print("")
            print("同步中止：%s" % exc, file=sys.stderr)
            return 1
        _detail("已同步到 %s" % common.upstream_commit(["--upstream", upstream])[:7])

    upstream_version = common.upstream_version(["--upstream", upstream])
    upstream_commit = common.upstream_commit(["--upstream", upstream])

    _step(3, "快照当前生成产物")
    tmp, snapshot = take_snapshot(out_root)
    try:
        _step(4, "重新生成 PHP SDK")
        try:
            generate(upstream, out_root)
            check_failure_logs()
        except SyncError as exc:
            print("")
            print("同步中止：%s" % exc, file=sys.stderr)
            return 1

        _step(5, "parity 一致性校验")
        try:
            output = run_parity(upstream, out_root)
        except SyncError as exc:
            print("")
            print("同步中止：%s" % exc, file=sys.stderr)
            return 1
        for line in output.splitlines():
            if line.startswith("[") or line.startswith("summary"):
                _detail(line)

        _step(6, "全量 php -l 语法检查")
        try:
            count = run_lint(out_root)
        except SyncError as exc:
            print("")
            print("同步中止：%s" % exc, file=sys.stderr)
            return 1
        _detail("%d 个文件，0 错误" % count)

        _step(7, "冒烟测试")
        if args.skip_tests:
            _detail("已跳过（--skip-tests）")
            test_result = "跳过（--skip-tests）"
        else:
            try:
                run_tests(out_root)
            except SyncError as exc:
                print("")
                print("同步中止：%s" % exc, file=sys.stderr)
                return 1
            test_result = "PASS（tests/smoke.php、tests/_core_smoke.php）"

        _step(8, "生成变更报告")
        stats, details = compare(snapshot, out_root)
        total = sum(
            item["added"] + item["modified"] + item["deleted"]
            for item in stats.values()
        )
        for label, _kind in GROUPS:
            item = stats[label]
            _detail(
                "%s：新增 %d / 修改 %d / 删除 %d"
                % (label, item["added"], item["modified"], item["deleted"])
            )
            for name in details[label]["added"][:10]:
                _detail("  + %s" % name)
            for name in details[label]["modified"][:10]:
                _detail("  ~ %s" % name)
            for name in details[label]["deleted"][:10]:
                _detail("  - %s" % name)

        results = {
            "parity": "PASS",
            "lint": "PASS（%d 个文件，0 错误）" % count,
            "tests": test_result,
        }
        today = datetime.date.today().isoformat()
        if total or upstream_version != old_version:
            state = upsert_changelog(
                out_root, upstream_version, upstream_commit, today, stats, results
            )
            changelog_note = "已写入 %s（%s）" % (
                os.path.join(out_root, CHANGELOG_NAME),
                state,
            )
        else:
            changelog_note = "无文件变化，未改动 CHANGELOG.md"
    finally:
        shutil.rmtree(tmp, ignore_errors=True)

    print("")
    print("========== 同步完成 ==========")
    print("上游版本：%s（提交 %s）" % (upstream_version, upstream_commit[:7]))
    if total:
        print("生成文件：新增 %d / 修改 %d / 删除 %d" % (
            sum(stats[l]["added"] for l, _ in GROUPS),
            sum(stats[l]["modified"] for l, _ in GROUPS),
            sum(stats[l]["deleted"] for l, _ in GROUPS),
        ))
    else:
        print("生成文件：无文件变化")
    print("校验结果：parity PASS；php -l 0 错误；冒烟测试 %s" % test_result)
    print("CHANGELOG：%s" % changelog_note)
    print("下一步：git diff --stat 复核变更后提交")
    return 0


if __name__ == "__main__":
    sys.exit(main())
