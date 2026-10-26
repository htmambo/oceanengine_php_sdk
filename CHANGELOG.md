# Changelog

本文件记录 `htmambo/oceanengine_php_sdk` 的变更。PHP SDK 由
[`oceanengine/ad_open_sdk_go`](https://github.com/oceanengine/ad_open_sdk_go) 转译生成，
上游版本是唯一事实来源；同步流程（`make sync` / `python3 tools/go2php/sync.py`）
会自动按上游版本在本文件中追加条目。

格式参考 [Keep a Changelog](https://keepachangelog.com/zh-CN/1.1.0/)，
版本号与上游 Go SDK 保持一致。

## [未发布]

### 迁移

- **仓库整体从内网 Gitea 迁移到 GitHub**：主仓库现为 `https://github.com/htmambo/oceanengine_php_sdk`（**公开仓**），
  原 Gitea 仅作旧镜像。公开后**安装不需要任何 token**（已实测：全新 HOME、无 credential helper 下
  `composer install` 直接成功，13,468 文件、autoload 正常）。`composer.json` 的 `homepage` / `support` 与 README 安装章节已同步为 GitHub 地址。
- 实测两条 GitHub 通道均可用：VCS（私有仓 + `gh auth setup-git`）31s / 69MB；
  dist zip（`api.github.com/.../zipball` + `github-oauth` token）30s / 13MB，13,468 文件零丢失。
- **dist 仍只能用 zip**（tar.gz 会丢 242 个长名模型类）；GitHub 归档已按 `.gitattributes` 裁剪，
  且为「单根目录 + composer.json + src/」结构，可直接作为 dist 使用。
- `tools/install_check.sh` 改为面向 GitHub 的通道诊断（保留 `--path-only` 离线模式）。


### 新增

- **重试与限速下沉到 SDK 内核**（应对批量投放的限流与瞬时故障）：
  `src/RetryPolicy.php`（不可变策略：次数、退避、抖动、Retry-After、可重试状态码与方法）、
  `src/RateLimiter.php`（令牌桶 QPS 限速）、`ApiClient` 集成（`setRetryPolicy` / `setRateLimiter`）、
  `Configuration` 新增 `retryPolicy` / `rateLimiter` / `timeoutSeconds`。
  **"结果不明"的失败（传输层错误、502/503/504）不会重放非幂等请求**，防止重放已成功的广告创建。
- **token 生命周期收进 SDK**：`src/Token/`（`TokenProviderInterface` / `TokenStoreInterface` /
  `InMemoryTokenStore` / `StaticTokenProvider` / `CachingTokenProvider` / `OAuthTokenProvider`）、
  `src/Middleware/TokenMiddleware.php`（注入 `Access-Token`、识别失效码 40103、刷新后重放一次）。
  含并发保护：`TokenLockInterface` 单飞刷新、`TokenLockTimeoutException`（拿不到锁宁可不刷新）、
  `TokenPersistenceException`（落库失败可补偿）。
- **安装通道**：新增 `.gitattributes`（发行包裁剪）与 `tools/install_check.sh`（各通道实测诊断），
  README「安装」章节按内网 http Gitea 的真实约束重写为四条可用路径（path+symlink / Registry /
  VCS 直取 / dist）。
  实测结论：**dist 必须用 zip**（tar.gz 经 PharData 解包会丢 242 个长名模型类），
  zip 实测 13,462/13,462 文件零丢失；path+symlink 为 1.4s / 88KB。

### 变更

- `composer.json` 的 `test` 脚本纳入新增的 `tests/_retry_smoke.php` 与 `tests/_token_smoke.php`。

## [1.1.97] - 初始版本

### 新增

- 由上游 `ad_open_sdk_go` v1.1.97 全量转译生成：模型类、API Service 与 Request builder
  （覆盖情况见 README 的「API 覆盖率 100%」说明）。
- 零第三方依赖的 HTTP 客户端（`ext-curl` / `ext-json`）、可插拔中间件链、可注入 transport。
- 上游同步机制与 CI 自动检查（见 `docs/UPSTREAM_SYNC.md`）。
- 随包提供 `LICENSE`（Apache-2.0，与上游 Go SDK 一致）。

### 修复

- 转译器枚举常量名改为支持 Unicode 标识符：上游 11 个枚举的 124 个中文名常量此前被丢弃，
  导致对应 PHP 类的 `ALLOWED_VALUES` 为空数组（枚举值丢失）；现已完整生成。
- 核心 HTTP 层安全加固（经外部审核三轮后合入）：
  - 重定向改为手工跟随（cURL `FOLLOWLOCATION` 关闭），跳转到不同 origin 时先移除
    `Access-Token` / `Authorization` / `Proxy-Authorization` / `Cookie`，最多 5 跳；
  - origin 比较补全默认端口（https→443 / http→80），同域重定向不再误丢 token；
    协议降级（https→http）视为不同 origin，同样剥离凭证；
  - 显式开启 `SSL_VERIFYPEER` / `SSL_VERIFYHOST`，并设置连接超时；
  - `prepareRequest()` 增加目标主机白名单（`Configuration::$allowCrossHostRequests` 可显式放行）；
  - 2xx 空响应体改为构造空模型，不再让生成代码对 null 解引用抛 TypeError。
- 同步工具链修复（经外部审核）：CHANGELOG 版本小节改为精确匹配（`v1.2` 不再误匹配 `v1.2.3`）、
  脏工作区检查纳入未跟踪文件并改用 `git status -z` 解析（重命名/带引号路径不再漏判）、
  拉取前二次复核上游改动、子进程增加超时。

### 变更

- 仓库根目录即 Composer 包根目录，包名与仓库路径对齐为 `htmambo/oceanengine_php_sdk`；
  许可由 MIT 更正为与上游 Go SDK 一致的 Apache-2.0；`composer.json` 增加 `homepage` / `support` /
  `scripts`（`test` / `lint` / `parity` / `sync` / `check`）与 `scripts-descriptions`。
