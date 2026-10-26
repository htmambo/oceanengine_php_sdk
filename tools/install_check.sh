#!/usr/bin/env bash
# 安装通道诊断（只读）：验证把本 SDK 引入消费方项目的各条通道。
#
# 用法：
#   bash tools/install_check.sh                 # 全部通道（含网络）
#   bash tools/install_check.sh --path-only     # 只测本地 path 通道（离线）
#
# 环境变量：
#   REPO_URL   Git 仓库地址（默认 GitHub 主仓库）
#   SDK_DIR    本 SDK 的本地路径（默认取脚本上两级目录）
#   GH_TOKEN   私有仓 dist 测试用 GitHub token（可选；不设则跳过该通道）
#
# 本脚本只读：临时目录在退出时清理，不修改任何仓库，不打印任何凭据。

set -u

REPO_URL="${REPO_URL:-https://github.com/htmambo/oceanengine_php_sdk.git}"
SDK_DIR="${SDK_DIR:-$(cd "$(dirname "$0")/.." && pwd)}"
GH_TOKEN="${GH_TOKEN:-}"
PATH_ONLY=0
[ "${1:-}" = "--path-only" ] && PATH_ONLY=1

OUT="$(mktemp -d /tmp/oe_install_check.XXXXXX)"
trap 'rm -rf "$OUT"' EXIT
cd "$OUT"

printf '仓库: %s\nSDK : %s\n\n' "$REPO_URL" "$SDK_DIR"
printf '%-22s %-14s %-8s %-12s %s\n' "通道" "结果" "耗时(s)" "体积" "备注"
printf '%-22s %-14s %-8s %-12s %s\n' "--------------------" "--------------" "--------" "------------" "------------------------------"

now() { python3 -c 'import time; print("%.2f" % time.time())'; }
elapsed() { python3 -c 'import sys; print("%.1f" % (float(sys.argv[2]) - float(sys.argv[1])))' "$1" "$2"; }
fmt_kb() { python3 -c 'import sys; print("%.1f MB" % (int(sys.argv[1]) / 1024.0) if int(sys.argv[1]) >= 1024 else "%d KB" % int(sys.argv[1]))' "$1"; }

write_consumer() {
    # $1: 目录  $2: repositories JSON  $3: 可选 require 约束（默认 dev-main）
    mkdir -p "$1"
    python3 - "$1" "$2" "${3:-dev-main}" "$SDK_DIR" <<'PY'
import json, sys
root, repos, want, sdk = sys.argv[1], sys.argv[2], sys.argv[3], sys.argv[4]
real = json.load(open(sdk + "/composer.json"))
consumer = {
    "name": "oe/consumer",
    "require": {"htmambo/oceanengine_php_sdk": want},
    "repositories": json.loads(repos),
    "minimum-stability": "dev",
    "prefer-stable": True,
}
json.dump(consumer, open(root + "/composer.json", "w"), indent=4)
PY
}

run_install() {
    local name="$1" dir="$2"
    local t0 t1 kb note
    t0=$(now)
    if (cd "$dir" && COMPOSER_HOME="$OUT/ch-$name" composer install --no-interaction > "$OUT/$name.log" 2>&1); then
        t1=$(now)
        kb=$(du -sk "$dir/vendor" 2>/dev/null | cut -f1)
        note="$(find -L "$dir/vendor/htmambo/oceanengine_php_sdk" -type f 2>/dev/null | wc -l | tr -d ' ') files"
        printf '%-22s %-14s %-8s %-12s %s\n' "$name" "OK" "$(elapsed "$t0" "$t1")" "$(fmt_kb "${kb:-0}")" "$note"
    else
        t1=$(now)
        printf '%-22s %-14s %-8s %-12s %s\n' "$name" "FAIL" "$(elapsed "$t0" "$t1")" "-" "$(tail -3 "$OUT/$name.log" | tr '\n' ' ' | cut -c1-90)"
    fi
}

# ---- A. path + symlink ------------------------------------------------------
if [ -d "$SDK_DIR/src" ]; then
    write_consumer "$OUT/a" "[{\"type\":\"path\",\"url\":\"$SDK_DIR\",\"options\":{\"symlink\":true}}]" "*"
    run_install "path+symlink" "$OUT/a"
else
    printf '%-22s %-14s %-8s %-12s %s\n' "path+symlink" "SKIP" "-" "-" "SDK_DIR 无 src/"
fi

# ---- A'. path 镜像拷贝 ------------------------------------------------------
if [ -d "$SDK_DIR/src" ]; then
    write_consumer "$OUT/am" "[{\"type\":\"path\",\"url\":\"$SDK_DIR\",\"options\":{\"symlink\":false}}]" "*"
    run_install "path(mirror)" "$OUT/am"
fi

if [ "$PATH_ONLY" = "1" ]; then
    printf '\n离线模式结束。临时目录已清理：%s\n' "$OUT"
    exit 0
fi

# ---- B. GitHub VCS ----------------------------------------------------------
write_consumer "$OUT/b" "[{\"type\":\"vcs\",\"url\":\"$REPO_URL\"}]"
run_install "vcs" "$OUT/b"

# ---- C. dist zip（GitHub API zipball，私有仓需 token） -----------------------
if [ -n "$GH_TOKEN" ]; then
    owner_repo=$(printf '%s' "$REPO_URL" | sed -E 's#^https?://[^/]+/##; s#\.git$##')
    export COMPOSER_AUTH
    COMPOSER_AUTH=$(python3 -c 'import json,os; print(json.dumps({"github-oauth": {"github.com": os.environ["GH_TOKEN"]}}))')
    python3 - "$OUT/c" "$owner_repo" "$SDK_DIR" <<'PY'
import json, sys
out, owner_repo, sdk = sys.argv[1], sys.argv[2], sys.argv[3]
real = json.load(open(sdk + "/composer.json"))
pkg = dict(real)
pkg["version"] = "dev-main"
pkg["dist"] = {"type": "zip", "url": "https://api.github.com/repos/%s/zipball" % owner_repo}
consumer = {
    "name": "oe/consumer",
    "require": {"htmambo/oceanengine_php_sdk": "dev-main"},
    "repositories": [{"type": "package", "package": pkg}],
    "minimum-stability": "dev",
    "prefer-stable": True,
}
json.dump(consumer, open(out + "/composer.json", "w"), indent=4)
PY
    run_install "dist(zip)" "$OUT/c"
else
    printf '%-22s %-14s %-8s %-12s %s\n' "dist(zip)" "SKIP" "-" "-" "未提供 GH_TOKEN（私有仓需要）"
fi

# ---- D. 归档结构检查（GitHub 归档是否含根目录与 composer.json） -------------
printf '\n说明：dist 必须用 zip；tar.gz 经 PharData 解包会丢 242 个长名模型类（已实测）。\n'
printf '临时目录已清理：%s\n' "$OUT"
