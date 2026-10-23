# 与上游 Go SDK 同步指南

本文档面向使用 `htmambo/oceanengine_php_sdk` 的开发者与维护者，说明 PHP SDK 如何跟随上游
[`oceanengine/ad_open_sdk_go`](https://github.com/oceanengine/ad_open_sdk_go) 迭代，以及同步失败时如何排查。

> 本文中的命令以**当前实现**为准；若与 CLI 的 `--help` 输出不一致，以 `--help` 为准
> （`python3 tools/go2php/sync.py --help`）。

## 1. 为什么需要同步机制

- **上游是唯一事实来源**：巨量引擎 OpenAPI 的模型、接口、字段定义全部由官方 Go SDK 维护，
  PHP SDK 不自己定义业务语义。
- **上游迭代很快**：Go SDK 按周迭代（当前版本 `1.1.97`，仓库中以 `v1.1.x` tag 发布），
  新接口、新字段、新枚举值都会先出现在 Go SDK 里。
- **PHP 侧不手改生成代码**：`src/Models/`、`src/Api/`、`src/Client.php` 全部由
  `tools/go2php/` 下的 Python 转译器从 Go 源码机械生成。
  **手工修改这些文件会在下一次同步时被覆盖**，所以 PHP 侧的更新必须走"重新生成"这条路径。
- **同步 = 拉取 + 生成 + 校验**：只有"重新生成"是不够的——如果上游新增了某个 model，
  转译器可能静默漏掉。因此同步流程内置了 Go↔PHP 一致性校验（parity），
  确保「上游有的，PHP 侧也一定有」。

一句话：**上游 Go SDK 是事实来源，PHP SDK 是生成产物，任何时候都不要手改生成目录。**

## 2. 目录布局要求

同步工具需要同时访问「PHP 包」与「上游 Go 仓」两个目录。默认约定两者**并列**：

```text
<your-workspace>/
├── ad_open_sdk_go/     # 上游 Go SDK（git clone https://github.com/oceanengine/ad_open_sdk_go.git）
└── ad_open_sdk_php/    # 本 PHP 包（git clone <your-php-sdk-repo>.git）
```

克隆示例：

```bash
git clone https://github.com/oceanengine/ad_open_sdk_go.git
git clone <your-php-sdk-repo>.git
```

工具按以下顺序解析上游路径与输出路径（`tools/go2php/common.py`）：

| 解析项 | 优先级 | 说明 |
| --- | --- | --- |
| 上游 Go 仓 | `--upstream PATH` 参数 | 命令行参数优先级最高 |
| 上游 Go 仓 | 环境变量 `OCEANENGINE_UPSTREAM` | 适合 CI 中注入路径 |
| 上游 Go 仓 | 默认 `../ad_open_sdk_go` | 相对 PHP 包根目录，即与本包并列的兄弟目录（以 `common.py` 的实现为准） |
| 输出包根 | `--out PATH` 参数 | 重新生成时写入的 PHP 包根目录 |
| 输出包根 | 环境变量 `OCEANENGINE_OUT` | 同上 |
| 输出包根 | 默认 = 当前 PHP 包根 | 在 PHP 包内直接执行生成器时的默认行为 |

用环境变量覆盖上游路径的示例：

```bash
# bash
export OCEANENGINE_UPSTREAM=/path/to/ad_open_sdk_go
python3 tools/go2php/sync.py
```

```powershell
# PowerShell
$env:OCEANENGINE_UPSTREAM = "C:\path\to\ad_open_sdk_go"
python3 tools/go2php/sync.py
```

> 所有生成与校验命令都**在 PHP 包根目录**（即 `ad_open_sdk_php/`）下执行。
> 若你在别的目录执行，请显式传 `--out <php-pkg-root>`。

## 3. 日常同步（三选一）

### 3.1 方式一：`make sync`（推荐）

```bash
make sync
```

`Makefile`（位于 PHP 包根目录）是最短路径：它把「拉取上游 → 重新生成三个转译器 → 跑 parity →
全量 `php -l` → 跑冒烟测试 → 写 CHANGELOG → 输出变更摘要」串成一步，并透传上游/输出路径参数。

失败时：命令会打印**失败的那一步**和对应的日志文件路径（通常是 `tools/go2php/*_failures.log`），
按第 7 节排查。`make sync` 失败**不会**留下半截状态：生成是幂等的，重新修好问题再跑一次即可。

### 3.2 方式二：`python3 tools/go2php/sync.py`

```bash
# 默认：拉取上游 → 生成 → parity → lint → test → 写 CHANGELOG + 变更摘要
python3 tools/go2php/sync.py

# 显式指定上游与输出目录
python3 tools/go2php/sync.py --upstream ../ad_open_sdk_go --out .

# CI 场景：上游由 CI 自己 checkout，不让脚本再 fetch
python3 tools/go2php/sync.py --upstream _upstream/ad_open_sdk_go --no-fetch
```

约定接口：

```text
python3 tools/go2php/sync.py [--upstream PATH] [--out PATH] [--no-fetch] [--check]
```

- `--upstream PATH`：上游 Go 仓路径（覆盖 `OCEANENGINE_UPSTREAM` 与默认值）。
- `--out PATH`：PHP 包根路径（覆盖 `OCEANENGINE_OUT` 与默认值）。
- `--no-fetch`：跳过「拉取上游」步骤，适合上游目录由 CI 预先 checkout 的场景。
- `--check`：**只读模式**。不重新生成、不写任何文件，只做校验（见第 4 节）。

失败时：脚本以非 0 退出码结束，并在标准输出打印失败阶段、失败原因与日志文件路径。

### 3.3 方式三：手工三步

```bash
# 1) 拉取上游
git -C ../ad_open_sdk_go pull --ff-only

# 2) 重新生成（models → api → client，顺序不要颠倒）
python3 tools/go2php/models.py
python3 tools/go2php/api.py
python3 tools/go2php/client.py

# 3) 一致性校验
python3 tools/go2php/parity.py
```

三个生成器都接受相同的公共参数（`--upstream` / `--out`），例如：

```bash
python3 tools/go2php/models.py --upstream ../ad_open_sdk_go --out .
```

手工方式的注意事项：

- 生成器是**幂等**的：同样的上游 + 同样的转译器版本，重复运行输出逐字节一致。
- `models.py` / `api.py` 会把无法转译的文件记录到 `tools/go2php/models_failures.log`、
  `tools/go2php/api_failures.log`，并以非 0 退出码结束——**必须先处理失败日志再提交**。
- 生成器还会清理"上游已删除"的旧产物（stale 文件），所以 diff 里出现文件删除是正常的。
- 手工方式不会自动写 `CHANGELOG.md`，需要你手动补一条同步记录。

## 4. CI 自动检查

`make check` 与 `python3 tools/go2php/sync.py --check` 是**只读**的，不修改工作区，适合放进 CI：

```bash
make check
# 等价于
python3 tools/go2php/sync.py --check
```

它会依次检查：

1. 上游 HEAD 是否比本地记录的版本/提交更新（有待同步的上游更新时退出码非 0）；
2. parity 一致性校验是否通过；
3. 全量 `php -l` 语法检查是否 0 错误；
4. `tests/smoke.php` 与 `tests/_core_smoke.php` 是否全部通过。

退出码含义：

| 退出码 | 含义 | 处置 |
| --- | --- | --- |
| `0` | 上游无新版本，且本地生成产物、parity、lint、测试全部通过 | 无需动作 |
| 非 `0` | 上游有更新待同步，或 parity FAIL / lint 报错 / 测试失败 | 按提示执行同步或排查 |

CI 配置在 `.github/workflows/sync-upstream.yml`，包含两个触发方式：

- `schedule`：每周一次自动检查；
- `workflow_dispatch`：手动触发，可指定 `upstream_ref`（tag / 分支 / commit），留空则用上游默认分支。

工作流会自行 checkout 上游（到 `_upstream/ad_open_sdk_go`）并以 `--no-fetch` 运行同步脚本；
有文件变更时自动开一个 PR（标题形如 `chore(sync): 同步上游 ad_open_sdk_go v1.1.98`），
**不会自动合并**。

同步脚本在拉取上游前会检查上游工作区状态：**只有 SDK 源码（`models/`、`api/`、`config/`、
`middleware/`、`client.go`、`go.mod`、`go.sum`）存在未提交修改才会中止**；`.gitignore`、
`.github/` 等本地工具类改动会被忽略并提示一句，不影响同步。确需在脏工作区上强制同步时用
`--force`。

## 5. 上游新增接口 / 模型时会发生什么

1. **自动生成**：上游新增 `models/model_*.go` 或 `api/api_*.go` 后，三个转译器会把它们转成
   新的 PHP 类（`src/Models/Xxx.php`、`src/Api/XxxApiService.php` + `XxxApiRequest.php`），
   并更新 `src/Client.php` 的 getter。
2. **parity 校验**：新接口/新模型必须在上游和 PHP 侧一一对应，否则 parity FAIL，
   同步流程中止。**这是防止漏转译的关键关卡。**
3. **新字段类型不被识别时**：如果上游引入了转译器还不认识的 Go 类型（例如新的
   `map[string]any` 别名、新的时间类型别名、自定义 `Nullable*` 类型），
   生成器会：
   - 跳过该字段并在 `tools/go2php/models_failures.log`（或 `api_failures.log`）中记录
     `文件名<TAB>失败原因`；
   - 以非 0 退出码结束，提醒你扩展转译器。
4. **如何扩展转译器**：
   - 打开 `tools/go2php/models.py`；
   - 在类型映射表里补充映射：
     - `GO_SCALARS`（约第 30 行）：Go 基础标量 → `(php_native, php_doc)`，例如
       `"int64": ("int", "int")`；
     - `GO_SPECIAL`（约第 42 行）：特殊类型 → `(php_native, php_doc, fallback_note)`，
       例如 `"time.Time": ("string", "string", None)`；
   - 复杂类型（切片、指针、嵌套 struct、enum）由 `map_go_type()` 递归推导，
     遇到不认识的形态请在该函数内补充分支；
   - 改完**重新生成**并重跑 parity：
     ```bash
     python3 tools/go2php/models.py
     python3 tools/go2php/api.py
     python3 tools/go2php/client.py
     python3 tools/go2php/parity.py
     ```
   - 确认 `tools/go2php/*_failures.log` 为空、`make test` 通过后再提交。
5. **手写补丁不可行**：不要通过"手改生成文件"绕过失败——下次同步就会被覆盖，
   且 parity 仍会 FAIL。请始终扩展转译器。

## 6. 版本与发布

- **版本单一来源**：上游 `ad_open_sdk_go/config/configuration.go` 中的
  `const Version = "1.1.97"` 是唯一事实来源。
- **PHP 侧版本自动写入**：生成器会写出 `src/Version.php`，其中包含
  `VERSION`（上游版本号）、`UPSTREAM_REPO`、`UPSTREAM_COMMIT`（同步时的上游提交）、
  `SYNCED_AT`（同步时间）等常量；`composer.json` 的 `extra.upstream` 记录同样的同步信息
  （`repo` / `version` / `commit` / `synced_at`）。
- **运行时版本**：`Configuration::SDK_VERSION` 引用 `Version::VERSION`，
  因此 `X-Sdk-Version` 请求头会随上游版本自动变化——**不要手写版本号**。
- **打 tag 的建议**：上游发布 `v1.1.98` 后，PHP 包同步完成后打同名 tag：
  ```bash
  git tag -a v1.1.98 -m "sync upstream ad_open_sdk_go v1.1.98"
  git push origin v1.1.98
  ```
  同名 tag 能让「PHP 包版本 ↔ 上游版本」一眼可对应。
- **CHANGELOG**：`sync.py` 会按上游版本在 `CHANGELOG.md` 中写入条目；手工同步时需自行补充。

## 7. 常见问题

### parity 报「孤儿类」（PHP 侧多出上游没有的类）

说明 PHP 侧存在上游已删除或改名的残留类。常见原因：

- 曾经手工新增/复制过 `src/Models/` 下的文件；
- 转译器在某个版本没有清理 stale 文件。

排查与处理：

```bash
# parity 报告里的 "stale PHP model classes: ..." 就是孤儿类清单（首选看这个）

# 需要手工比对时：Go 侧 type 名 vs PHP 侧 class 名
find ../ad_open_sdk_go/models -name '*.go' -exec grep -h -oE '^type [A-Za-z0-9_]+' {} + \
  | sed 's/^type //' | sort -u > /tmp/go_models.txt
grep -h -oE '^(final )?class [A-Za-z0-9_]+' src/Models/*.php \
  | sed -E 's/^(final )?class //' | sort -u > /tmp/php_models.txt
diff /tmp/go_models.txt /tmp/php_models.txt
```

> 正常情况下 diff 里只会出现上游的工具类型（`Nullable*`、`MappedNullable`、`FormFileInfo`），
> 它们由 parity 显式豁免、不需要生成 PHP 类。除此之外多出来的行才是真正的孤儿类。

确认是残留后**重新生成**（生成器会清理 stale 文件）：

```bash
python3 tools/go2php/models.py
python3 tools/go2php/api.py
python3 tools/go2php/client.py
```

### parity 报「悬空引用」（PHP 类引用了不存在的类型）

通常是转译器生成了引用，但对应类型未被生成，或手工改过生成文件。排查顺序：

1. 看 parity 报告指出的类名与被引用的类型名；
2. 检查 `tools/go2php/models_failures.log` / `api_failures.log` 是否有对应记录
   —— 有记录说明是"转译失败导致缺类"，按第 5 节扩展转译器；
3. 无记录则多半是 stale 残留，重新生成即可消除。

> parity 的对应输出为 `dangling model reference: <文件> -> <类名>`。

### parity 报「版本不一致」

`src/Version.php` 里的 `VERSION` 与上游 `config/configuration.go` 的 `const Version` 不相等。

处理：

```bash
# 对比两侧版本
grep -n "const Version" ../ad_open_sdk_go/config/configuration.go
grep -n "VERSION" src/Version.php
```

若上游已升版而 PHP 侧没跟上 → 跑一次同步；若两侧都一致但 parity 仍报不一致，
说明 `Version.php` 未被正确生成，请删除该文件后重新生成
（`src/Version.php` 完全由生成器产出，属于生成目录，不要手改）。

### 生成器报 failures（非空日志）

```bash
cat tools/go2php/models_failures.log
cat tools/go2php/api_failures.log
```

日志每行是 `文件名<TAB>原因`（api 日志为分段 traceback）。按第 5 节扩展转译器后重跑。

### 绝对不要手改这些文件

```text
src/Models/**      # 全部由 models.py 生成
src/Api/**         # 全部由 api.py 生成
src/Client.php     # 全部由 client.py 生成
src/Version.php    # 全部由同步流程生成
```

任何手改都会在下次 `make sync` 时被覆盖。需要新能力时，改转译器（`tools/go2php/*.py`），
而不是改生成产物。

## 8. 校验清单（可复制粘贴）

一次性跑完全部校验：

```bash
# 0) 确认在上游有新版本时，本地已经是最新生成产物
python3 tools/go2php/sync.py --check

# 1) 一致性校验（Go ↔ PHP）
python3 tools/go2php/parity.py

# 2) 全量语法检查（1.3 万个文件，串行较慢，用 -P 并行）
find src -name '*.php' -print0 | xargs -0 -P 8 -n 1 php -l > /dev/null && echo "php -l OK"

# 3) 冒烟测试
php tests/smoke.php
php tests/_core_smoke.php

# 4) 失败日志为空
test ! -s tools/go2php/models_failures.log && test ! -s tools/go2php/api_failures.log && echo "no failures"
```

或在包根目录用 Makefile 一步完成 1–4：

```bash
make check
```

完整同步（会写入工作区）：

```bash
make sync
```

提交前确认没有意外改动：

```bash
git status --short
git diff --stat
```

## 相关文档

- 项目级维护者文档：`docs/Usage/SDK_UPDATE_GUIDE.md`（在项目仓库根目录的 `docs/Usage/` 下）。
- 转译器源码：`tools/go2php/models.py`、`tools/go2php/api.py`、`tools/go2php/client.py`、
  `tools/go2php/common.py`、`tools/go2php/parity.py`、`tools/go2php/sync.py`。
- CI 工作流：`.github/workflows/sync-upstream.yml`。
