#!/bin/bash
#
# install_check.sh —— 诊断本 SDK 的各种安装通道，输出「通道 / 结果 / 耗时 / 体积」对照表。
#
# 设计约束：
#   * 只读：不会修改 SDK 仓库、消费方项目或任何全局配置。
#   * 隔离：所有临时产物（含 COMPOSER_HOME）都在 mktemp -d 目录里，退出时清理。
#   * 不打印任何凭据：探测 Composer Registry 时使用匿名访问，不读取本机 auth.json。
#
# 用法：
#   bash tools/install_check.sh              # 全量通道（需要能访问内网 Gitea）
#   bash tools/install_check.sh --path-only  # 只测本地 path 通道（离线可用）
#
# 可覆盖的环境变量：
#   GITEA_HOST   内网 Gitea 的 host:port，默认 gitea.example.com:3000
#
set -u

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
SDK_ROOT="$(cd "$SCRIPT_DIR/.." && pwd)"

GITEA_HOST="${GITEA_HOST:-gitea.example.com:3000}"
GITEA_BASE="http://${GITEA_HOST}"
REPO_SLUG="htmambo/oceanengine_php_sdk"
VCS_URL="${GITEA_BASE}/${REPO_SLUG}.git"
VCS_URL_NOGIT="${GITEA_BASE}/${REPO_SLUG}"
REGISTRY_URL="${GITEA_BASE}/api/packages/htmambo/composer"
PKG="htmambo/oceanengine_php_sdk"

PATH_ONLY=0
for arg in "$@"; do
    case "$arg" in
        --path-only) PATH_ONLY=1 ;;
        -h|--help)
            sed -n '2,20p' "${BASH_SOURCE[0]}" | sed 's/^# \{0,1\}//'
            exit 0
            ;;
        *)
            echo "未知参数：$arg（可用：--path-only）" >&2
            exit 2
            ;;
    esac
done

# ---------------------------------------------------------------- 基础设施

TMPROOT="$(mktemp -d "${TMPDIR:-/tmp}/oe_install_check.XXXXXX")"
cleanup() {
    # 只删自己创建的临时目录，绝不碰用户仓库
    case "$TMPROOT" in
        "${TMPDIR:-/tmp}"/oe_install_check.*) rm -rf "$TMPROOT" ;;
    esac
}
trap cleanup EXIT INT TERM

now() {
    python3 -c 'import time;print("%.3f"%time.time())' 2>/dev/null || date +%s
}

fmt_kb() {
    awk -v k="${1:-}" 'BEGIN{ if (k=="" || k=="0") { printf "-"; } else if (k>=1024) { printf "%.1f MB", k/1024; } else { printf "%d KB", k; } }'
}

fmt_s() {
    awk -v s="${1:-}" 'BEGIN{ if (s=="") { printf "-"; } else { printf "%.1fs", s; } }'
}

# 结果表数据用三个并行数组（bash 3.2 兼容，不用关联数组）
NAMES=(); RESULTS=(); TIMES=(); SIZES=(); NOTES=()

record() { # name result time size note
    NAMES+=("$1"); RESULTS+=("$2"); TIMES+=("$3"); SIZES+=("$4"); NOTES+=("$5")
}

# 生成消费方项目的 composer.json（用 python3 拼，避免 shell 引号地狱）
gen_composer() { # dest_file repositories_json require_value [extra_json]
    python3 - "$1" "$2" "$3" "${4:-}" <<'PY'
import json, sys
dest, repos, req, extra = sys.argv[1], json.loads(sys.argv[2]), sys.argv[3], sys.argv[4]
cfg = {"name": "diag/consumer", "require": {req: "*"}, "repositories": repos,
       "config": {"secure-http": False}}
if extra:
    cfg.update(json.loads(extra))
open(dest, "w").write(json.dumps(cfg, indent=2))
PY
}

# 跑一次 composer install，输出：<退出码> <耗时秒> <体积KB> <日志路径>
run_install() { # consumer_dir
    local dir="$1"
    local chome="$TMPROOT/chome-$2"
    local t0 t1 rc
    mkdir -p "$chome"
    t0="$(now)"
    ( cd "$dir" && COMPOSER_HOME="$chome" COMPOSER_PROCESS_TIMEOUT=600 \
        composer install --no-interaction --no-progress ) >"$dir/install.log" 2>&1
    rc=$?
    t1="$(now)"
    echo "$rc $(awk -v a="$t0" -v b="$t1" 'BEGIN{printf "%.1f", b-a}') $(du -sk "$dir" 2>/dev/null | awk '{print $1}') $dir/install.log"
}

# 从日志里抓一行最有信息量的错误
grab_error() { # logfile
    grep -m1 -E 'No driver found|Your configuration does not allow|minimum-stability|could not be found|Cannot extract|Extraction from|failed|Failed|not found in any version' "$1" 2>/dev/null \
        | sed 's/^[[:space:]]*//; s/[[:space:]]*$//' | cut -c1-72
}

# ---------------------------------------------------------------- 本地 path 通道

channel_path_symlink() {
    local d="$TMPROOT/c-path-symlink"
    mkdir -p "$d"
    gen_composer "$d/composer.json" \
        "[{\"type\":\"path\",\"url\":\"$(printf '%s' "$SDK_ROOT" | sed 's/\\/\\\\/g')\",\"options\":{\"symlink\":true}}]" \
        "$PKG" '{"minimum-stability":"dev"}'
    local out; out="$(run_install "$d" pathsym)"
    local rc t kb log
    rc=$(echo "$out" | awk '{print $1}'); t=$(echo "$out" | awk '{print $2}')
    kb=$(echo "$out" | awk '{print $3}'); log=$(echo "$out" | awk '{print $4}')
    local link_state="no"
    [ -L "$d/vendor/htmambo/oceanengine_php_sdk" ] && link_state="yes"
    if [ "$rc" = "0" ]; then
        record "path+symlink" "OK" "$t" "$(fmt_kb "$kb")" "symlink=$link_state"
    else
        record "path+symlink" "FAIL" "$t" "$(fmt_kb "$kb")" "$(grab_error "$log")"
    fi
}

channel_path_mirror() {
    local d="$TMPROOT/c-path-mirror"
    mkdir -p "$d"
    gen_composer "$d/composer.json" \
        "[{\"type\":\"path\",\"url\":\"$(printf '%s' "$SDK_ROOT" | sed 's/\\/\\\\/g')\",\"options\":{\"symlink\":false}}]" \
        "$PKG" '{"minimum-stability":"dev"}'
    local out; out="$(run_install "$d" pathmirror)"
    local rc t kb log
    rc=$(echo "$out" | awk '{print $1}'); t=$(echo "$out" | awk '{print $2}')
    kb=$(echo "$out" | awk '{print $3}'); log=$(echo "$out" | awk '{print $4}')
    local leaked="-"
    [ -f "$d/vendor/htmambo/oceanengine_php_sdk/.env" ] && leaked="yes"
    if [ "$rc" = "0" ]; then
        record "path(mirror)" "OK" "$t" "$(fmt_kb "$kb")" "copied .env=$leaked"
    else
        record "path(mirror)" "FAIL" "$t" "$(fmt_kb "$kb")" "$(grab_error "$log")"
    fi
}

# ---------------------------------------------------------------- 网络通道

channel_vcs() { # label url secure_http
    local label="$1" url="$2" secure="$3"
    local d="$TMPROOT/c-vcs-$(echo "$label" | tr -c 'a-zA-Z0-9' '-')"
    mkdir -p "$d"
    local extra='{"minimum-stability":"dev"}'
    if [ "$secure" = "no" ]; then
        extra='{"minimum-stability":"dev","config":{"secure-http":true}}'
    fi
    gen_composer "$d/composer.json" "[{\"type\":\"vcs\",\"url\":\"$(printf '%s' "$url" | sed 's/\\/\\\\/g')\"}]" "$PKG" "$extra"
    local out; out="$(run_install "$d" "vcs$(echo "$label" | tr -c 'a-zA-Z0-9' '-')")"
    local rc t kb log
    rc=$(echo "$out" | awk '{print $1}'); t=$(echo "$out" | awk '{print $2}')
    kb=$(echo "$out" | awk '{print $3}'); log=$(echo "$out" | awk '{print $4}')
    if [ "$rc" = "0" ]; then
        record "$label" "OK" "$t" "$(fmt_kb "$kb")" ""
    else
        record "$label" "FAIL" "$t" "$(fmt_kb "$kb")" "$(grab_error "$log")"
    fi
}

channel_registry() {
    local d="$TMPROOT/c-registry"
    mkdir -p "$d"
    gen_composer "$d/composer.json" "[{\"type\":\"composer\",\"url\":\"$(printf '%s' "$REGISTRY_URL" | sed 's/\\/\\\\/g')\"}]" "$PKG" ''
    local out; out="$(run_install "$d" registry)"
    local rc t kb log
    rc=$(echo "$out" | awk '{print $1}'); t=$(echo "$out" | awk '{print $2}')
    kb=$(echo "$out" | awk '{print $3}'); log=$(echo "$out" | awk '{print $4}')

    # 匿名探测端点形态（不读 auth.json，不打印任何凭据）
    local p2_code list_code
    p2_code=$(curl -s -m 15 -o /dev/null -w '%{http_code}' "${REGISTRY_URL}/p2/${PKG}.json" 2>/dev/null)
    list_code=$(curl -s -m 15 -o /dev/null -w '%{http_code}' "${REGISTRY_URL}/list.json" 2>/dev/null)
    local note="p2=${p2_code:-?} list=${list_code:-?}"
    if [ "$rc" = "0" ]; then
        record "gitea registry" "OK" "$t" "$(fmt_kb "$kb")" "$note"
    elif [ "${p2_code:-000}" = "404" ]; then
        record "gitea registry" "NOT-PUBLISHED" "$t" "-" "$note"
    else
        record "gitea registry" "FAIL" "$t" "-" "$note"
    fi
}

# ---------------------------------------------------------------- git archive 通道

channel_archive() {
    if ! git -C "$SDK_ROOT" rev-parse --git-dir >/dev/null 2>&1; then
        record "git archive" "SKIP" "-" "-" "not a git repo"
        return
    fi
    local out="$TMPROOT/arc"
    mkdir -p "$out"
    local t0 t1
    t0="$(now)"
    git -C "$SDK_ROOT" archive --format=tar.gz -o "$out/full.tar.gz" HEAD >/dev/null 2>&1
    git -C "$SDK_ROOT" archive --format=tar.gz --worktree-attributes -o "$out/lean.tar.gz" HEAD >/dev/null 2>&1
    t1="$(now)"
    local full_b lean_b full_n lean_n
    full_b=$( [ -f "$out/full.tar.gz" ] && stat -f%z "$out/full.tar.gz" || echo 0 )
    lean_b=$( [ -f "$out/lean.tar.gz" ] && stat -f%z "$out/lean.tar.gz" || echo 0 )
    full_n=$( [ -f "$out/full.tar.gz" ] && tar -tzf "$out/full.tar.gz" | wc -l | tr -d ' ' || echo 0 )
    lean_n=$( [ -f "$out/lean.tar.gz" ] && tar -tzf "$out/lean.tar.gz" | wc -l | tr -d ' ' || echo 0 )
    local stripped="no"
    if [ -f "$out/lean.tar.gz" ] && ! tar -tzf "$out/lean.tar.gz" | grep -qE '^(tests|tools|docs|\.github)/'; then
        stripped="yes"
    fi
    local note="full=${full_b}B/${full_n}f lean=${lean_b}B/${lean_n}f export-ignore=${stripped}"
    record "git archive" "OK" "$(fmt_s "$(awk -v a="$t0" -v b="$t1" 'BEGIN{printf "%.1f", b-a}')")" \
        "$(awk -v b="$lean_b" 'BEGIN{printf "%.1f MB", b/1048576}')" "$note"
}

# ---------------------------------------------------------------- 主流程

echo "巨量引擎 PHP SDK —— 安装通道诊断"
echo "SDK 根目录 : $SDK_ROOT"
echo "Gitea      : $GITEA_BASE"
echo "Composer   : $(composer --version 2>/dev/null | head -1)"
echo "PHP        : $(php -r 'echo PHP_VERSION;' 2>/dev/null)"
echo

if [ "$PATH_ONLY" = "1" ]; then
    echo "模式：--path-only（只测本地 path 通道，离线可用）"
    echo
    channel_path_symlink
    channel_path_mirror
else
    echo "模式：全量通道"
    echo
    channel_path_symlink
    channel_path_mirror
    if command -v git >/dev/null 2>&1; then
        channel_vcs "vcs(.git)+http" "$VCS_URL" yes
        channel_vcs "vcs(.git) no-http" "$VCS_URL" no
        channel_vcs "vcs(no .git)" "$VCS_URL_NOGIT" yes
    else
        record "vcs(.git)+http" "SKIP" "-" "-" "git not found"
        record "vcs(.git) no-http" "SKIP" "-" "-" "git not found"
        record "vcs(no .git)" "SKIP" "-" "-" "git not found"
    fi
    if command -v curl >/dev/null 2>&1; then
        channel_registry
    else
        record "gitea registry" "SKIP" "-" "-" "curl not found"
    fi
    channel_archive
fi

# ---------------------------------------------------------------- 输出对照表

echo
printf '%-22s %-15s %-9s %-10s %s\n' "通道" "结果" "耗时" "体积" "备注"
printf '%-22s %-15s %-9s %-10s %s\n' "----------------------" "---------------" "---------" "----------" "----------------------------------------"
i=0
while [ "$i" -lt "${#NAMES[@]}" ]; do
    printf '%-22s %-15s %-9s %-10s %s\n' \
        "${NAMES[$i]}" "${RESULTS[$i]}" "${TIMES[$i]}" "${SIZES[$i]}" "${NOTES[$i]}"
    i=$((i + 1))
done

echo
echo "图例："
echo "  OK             安装成功"
echo "  FAIL           安装失败（备注里是抓到的关键错误原文）"
echo "  NOT-PUBLISHED  通道本身可用，但包还没发布到 Registry"
echo "  SKIP           缺少前置工具或环境不满足"
echo
echo "体积 = 消费方项目目录（含 vendor/）的 du -sk 实测值；path+symlink 的软链接不计入。"
echo "耗时 = composer install 墙钟时间；网络通道为冷缓存（独立 COMPOSER_HOME）。"
echo "本脚本为只读诊断：临时目录 $TMPROOT 将在退出时清理，未使用也未打印任何凭据。"
