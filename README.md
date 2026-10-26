# 巨量引擎开放平台 OpenAPI SDK for PHP

由官方 [`ad_open_sdk_go`](https://github.com/oceanengine/ad_open_sdk_go)（API version 1.1.97）全自动转译生成的 PHP SDK。

- **API 覆盖率 100%**：1261 个 API Service / 1261 个 Request builder，与 Go SDK 一一对应
- **10917 个模型类**：enum 常量类 + struct DTO（`jsonSerialize` / `fromArray`）
- **零第三方依赖**：仅需 PHP >= 8.0、`ext-curl`、`ext-json`
- **可测试**：HTTP transport 可注入（`ApiClient::setTransport`），方便 fake 测试
- **中间件链**：鉴权、请求头、日志均为可插拔中间件

| 项 | 值 |
| --- | --- |
| 仓库地址 | `http://gitea.example.com:3000/htmambo/oceanengine_php_sdk` |
| 主分支 | `main` |
| Composer 包名 | `htmambo/oceanengine_php_sdk` |
| 命名空间 | `Oceanengine\`（PSR-4 → `src/`） |
| 当前同步上游 | Go SDK `v1.1.97`（commit `1907e5f`） |
| 许可 | Apache-2.0（与上游 Go SDK 一致） |

## 仓库结构

本仓库根目录即 Composer 包根目录：

```
.
├── composer.json          # 包定义（PSR-4: Oceanengine\ -> src/）
├── .gitattributes         # export-ignore：让 git archive / dist 瘦身
├── Makefile               # 上游同步相关入口：make sync / check / generate / test ...
├── CHANGELOG.md           # 按上游版本分节的同步记录
├── LICENSE                # Apache-2.0（沿用上游 Go SDK）
├── docs/
│   └── UPSTREAM_SYNC.md   # 与上游同步的完整说明
├── src/
│   ├── Client.php         # 顶级 Client（1261 个 service getter）
│   ├── Configuration.php  # host / scheme / 默认头 / 超时与白名单开关
│   ├── ApiClient.php      # HTTP 传输层：中间件链、cURL、响应解码
│   ├── GenericOpenAPIError.php
│   ├── FormFileInfo.php
│   ├── Version.php        # 自动生成：VERSION / UPSTREAM_COMMIT / SYNCED_AT
│   ├── Middleware/        # Auth / Header / Log
│   ├── Api/               # 1261 个 *ApiService + Request builder（生成）
│   └── Models/            # 10917 个模型类（生成）
├── tests/
│   ├── smoke.php          # 端到端冒烟（fake transport，离线）
│   ├── _core_smoke.php    # 核心层与安全行为断言
│   ├── integration.php    # 真实接口联调（需 .env 凭证与外网，只读场景链）
│   └── _mock_server.php   # 联调用的本地假服务端（php -S）
├── tools/go2php/          # Go → PHP 转译器与同步工具链
├── tools/install_check.sh # 安装通道诊断脚本（只读；--path-only 可离线运行）
└── .github/workflows/     # CI：定时检查上游并自动开 PR
```

> `src/Api/`、`src/Models/`、`src/Client.php` 由转译器生成，**请勿手工修改**，会在下次同步时被覆盖。
>
> `.env`（联调凭证）已被 `.gitignore` 忽略，请勿提交；模板见 [.env.example](.env.example)。

## 安装

> **本仓库根目录即 Composer 包根目录**：`composer.json` 就在仓库根目录，PSR-4 映射 `Oceanengine\` → `src/`。克隆下来直接就能用，不需要任何构建 / 代码生成步骤。

内网 Gitea（`http://gitea.example.com:3000`）只提供 http，Composer 默认拒绝 insecure transport，所以**凡是走网络的装法都必须先放开 http**。下面给出 4 条可用路径（A–D），每条都标注了本机实测的耗时与体积。

### 先决条件（走网络的路径都要满足）

**1）放开 http**

```bash
composer config --global secure-http false
```

或在消费方 `composer.json` 里写：

```json
{ "config": { "secure-http": false } }
```

**2）版本约束写 `dev-main`**

本仓库目前**没有任何 git tag**，Composer 从 Gitea 只能解析出 `dev-main` 这一个版本。写 `"*"` 会直接失败：

```
  Problem 1
    - Root composer.json requires htmambo/oceanengine_php_sdk *, found htmambo/oceanengine_php_sdk[dev-main] but it does not match your minimum-stability.
```

正确写法二选一：

```json
{ "require": { "htmambo/oceanengine_php_sdk": "dev-main" } }
```

```json
{ "require": { "htmambo/oceanengine_php_sdk": "*" }, "minimum-stability": "dev" }
```

> 如果给仓库打一个 tag（如 `v1.0.0`），就可以直接写稳定版本约束，不再需要 `dev-main`。

---

### A. path + symlink（本地开发首选）

SDK 已经 clone 在本机、且你要边写边测时用这条。**秒级、零拷贝**。

```json
{
    "repositories": [
        {
            "type": "path",
            "url": "/Volumes/Workarea/usr/htdocs/oceanengine/ad_open_sdk_php",
            "options": { "symlink": true }
        }
    ],
    "require": {
        "htmambo/oceanengine_php_sdk": "*"
    },
    "minimum-stability": "dev"
}
```

```bash
composer update htmambo/oceanengine_php_sdk
```

**实测：1.1s，消费方 `vendor/` 合计 88 KB**（SDK 本身 0 拷贝，`vendor/htmambo/oceanengine_php_sdk` 是一个软链接）。

symlink 模式下的注意事项：

- **`vendor/` 是共享的**：软链接指向 SDK 仓库本体，所以 SDK 仓库里的 `vendor/`（第三方依赖）会和消费方看到的是同一份。在 SDK 仓库里执行 `composer install` 会直接影响消费方。
- **`.env` 也是共享的**：软链接指向 SDK 仓库根目录，所以 `vendor/htmambo/oceanengine_php_sdk/.env`（联调凭证）、`.git`、`tests/`、`tools/` 全都可达（实测均可达）。SDK 仓库已经在 `.gitignore` 里忽略了 `.env`，但**不要把 `vendor/` 提交进仓库**，否则凭证会泄露。
- SDK 仓库里改代码，消费方立刻生效，无需重新 `composer update`。
- 软链接要求消费方与 SDK 仓库在**同一台机器**上；CI / 跨机场景请用 C 或 D。

> **反向对照**：不写 `options.symlink`（或显式 `"symlink": false`）时，Composer 2 会走 **Mirroring** 把仓库复制一份 —— **实测 19.6s、68.5MB**（`.gitattributes` 落地之前是 11.0s / 73MB，`tests/`、`tools/`、`docs/`、`.github/` 会被一并复制）。
>
> 好消息是 Composer 复制时会用 `.gitignore` + `.gitattributes` 的 `export-ignore` 过滤，所以 `.env`、`vendor/`、`.git` **以及** `tests/`、`tools/`、`docs/`、`.github/` **都不会**被复制进 `vendor/`；复制进去的只有 `src/` 和包元数据。
>
> 代价是 68.5MB 的拷贝和接近 20s 的等待 —— 这就是引入方反馈的「29.6s / 69MB」的来源量级（差异来自磁盘与页缓存冷热）。

---

### B. Composer Registry（Gitea 包仓库）

适合「没有源码、只装包」的正式消费方，语义最接近 packagist。

**前提：仓库必须先在 Gitea 发布为 Composer 包**（Gitea → Packages → New Package → Composer，或仓库页的 Publish Package）。

```json
{
    "repositories": [
        {
            "type": "composer",
            "url": "http://gitea.example.com:3000/api/packages/htmambo/composer"
        }
    ],
    "require": {
        "htmambo/oceanengine_php_sdk": "*"
    },
    "config": {
        "secure-http": false
    }
}
```

**认证**（Registry 设为私有时才需要）：

```bash
composer config --global http-basic.gitea.example.com:3000 <your-user> <your-token>
```

该命令会写入 `auth.json`（已实测确认写入位置正确）：

```json
{
    "http-basic": {
        "gitea.example.com:3000": {
            "username": "<your-user>",
            "password": "<your-token>"
        }
    }
}
```

**实测结果**：

- Registry 端点 `GET /api/packages/htmambo/composer/packages.json` → **HTTP 200**，且**读取元数据不需要 token**（`list.json` 也返回 200）。
- 但本包**尚未发布**：`GET /api/packages/htmambo/composer/p2/htmambo/oceanengine_php_sdk.json` → **HTTP 404 `{"errors":[{"status":404,"message":"package does not exist"}]}`**，`list.json` → `{"packageNames":[]}`。
- 因此现在执行 `composer install` 的结果是：

  ```
  Problem 1
    - Root composer.json requires htmambo/oceanengine_php_sdk, it could not be found in any version, there may be a typo in the package name.
  ```

- 结论：**通道本身可用，卡在「包还没发布」**。在 Gitea 上把本仓库发布为 Composer 包后即可直接使用，无需改消费方配置。

---

### C. VCS 直取（CI / 跨机首选）

不需要 Gitea 的包仓库权限，只要能 `git clone` 就行。

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "http://gitea.example.com:3000/htmambo/oceanengine_php_sdk.git"
        }
    ],
    "require": {
        "htmambo/oceanengine_php_sdk": "dev-main"
    },
    "config": {
        "secure-http": false
    }
}
```

**实测：冷启动 30.0s，`vendor/` 75MB**（13,470 个文件全部到位，长文件名的模型类也可正常 autoload）。

注意：

- URL **必须带 `.git` 后缀**。原因见下面的报错速查表。
- 走的是 git clone，`.git` 不进包（Composer 用 mirror clone 再 checkout），所以没有 A 方案那种「复制 `.env`」的副作用。
- 本仓库的 Gitea 仓库**当前是公开可读的**：实测在空 `HOME`（无 credential helper、无缓存）下 `git ls-remote` 直接成功，**不需要 token**。若你们的 Gitea 改成私有，请先配置 git 凭据（`git config --global credential.helper store` + 推一次即可写入，或用 SSH key）。

#### 常见报错与修法

| 报错原文 | 原因 | 修法 |
| --- | --- | --- |
| `No driver found to handle VCS repository http://gitea.example.com:3000/htmambo/oceanengine_php_sdk` | **URL 缺 `.git` 后缀**，且 Composer 的兜底深探测（`git ls-remote`）也失败了 | URL 补上 `.git`；或改用 A / B / D |
| `Your configuration does not allow connections to http://gitea.example.com:3000/...` | Composer 拒绝 insecure transport | 加 `"config": {"secure-http": false}`，或 `composer config --global secure-http false` |
| `found htmambo/oceanengine_php_sdk[dev-main] but it does not match your minimum-stability` | 本仓库没有 tag，只有 `dev-main` | 约束写 `"dev-main"`，或加 `"minimum-stability": "dev"` |
| `svn info` 一直挂住不动（最后 process timeout） | URL 缺 `.git` → GitDriver 浅层识别失败，Composer 回退去试 svn 驱动 | 同第一行：补 `.git` |

**「No driver found」到底是怎么来的**（Composer 2.8.12 源码依据）：

- `Composer\Repository\VcsRepository::getDriver()` 先做**浅层**匹配，再做**深层**探测。
- `Composer\Repository\Vcs\GitDriver::supports()` 的浅层判定正则是 `#(^git://|\.git/?$|git(?:olite)?@|//git\.|//github.com/)#i` —— **URL 必须以 `.git` 结尾**才认得出是 git 仓库。
- 浅层没匹配上时，Composer 会退回去依次试 hg / svn / fossil（svn 排在最后，因为「认出 svn 服务器」几乎不可能），**最后才**用 `git ls-remote --heads -- <url>` 做深层探测。
- 只要 `git ls-remote` 这一步失败（git 不在 PATH、需要交互式输入凭据、host 不可达），所有驱动都不匹配，Composer 就在 `VcsRepository.php:192` 抛出上面那句 `No driver found to handle VCS repository <url>`。

本机实测复现：

- URL 带 `.git` → 浅层就命中，**不会**走上面的探测逻辑。
- URL 不带 `.git` + 本机有 git → 走深层探测，`git ls-remote` 命中，**也能装成功**（实测 18.3s / 74.7MB）。但这条路径依赖深探测，比带 `.git` 脆弱，不要依赖它。
- URL 不带 `.git` + 深探测失败 + 本机有 svn → 回退 svn 驱动，卡在 `svn info`，实测 **121.4s 超时**。
- URL 不带 `.git` + 本机 git/svn 都不可用 → 复现出 `No driver found to handle VCS repository http://gitea.example.com:3000/htmambo/oceanengine_php_sdk`（`VcsRepository.php:192`）。

> 一句话：**URL 带上 `.git`**，让 Composer 走浅层识别，就完全不用碰上面这套探测逻辑。

---

### D. 固定版本 / 源码包

需要把「某个版本号」钉死、或者没有 git 客户端权限时用。

#### D1. package + source（git）：钉版本号的推荐做法

比 `dist` tarball 可靠得多（见下方警告），把「版本号 → git commit」的映射写死在消费方 `composer.json` 里：

```json
{
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "htmambo/oceanengine_php_sdk",
                "version": "1.0.0",
                "type": "library",
                "source": {
                    "type": "git",
                    "url": "http://gitea.example.com:3000/htmambo/oceanengine_php_sdk.git",
                    "reference": "649f8ff31a33876e2f381566e34d99683bbe2953"
                },
                "autoload": { "psr-4": { "Oceanengine\\": "src/" } },
                "require": { "php": ">=8.0", "ext-curl": "*", "ext-json": "*" }
            }
        }
    ],
    "require": { "htmambo/oceanengine_php_sdk": "1.0.0" },
    "config": { "secure-http": false }
}
```

**实测：4.0s，75MB，13,470 个文件全部到位，`class_exists('Oceanengine\Client')` 与长文件名模型类均为 `true`。**

#### D2. package + dist：**用 zip，不要用 tar.gz**

```json
{
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "htmambo/oceanengine_php_sdk",
                "version": "1.0.0",
                "type": "library",
                "dist": {
                    "type": "tar",
                    "url": "http://gitea.example.com:3000/where/you/host/oceanengine_php_sdk.tar.gz",
                    "reference": "649f8ff31a33876e2f381566e34d99683bbe2953"
                },
                "autoload": { "psr-4": { "Oceanengine\\": "src/" } },
                "require": { "php": ">=8.0", "ext-curl": "*", "ext-json": "*" }
            }
        }
    ],
    "require": { "htmambo/oceanengine_php_sdk": "1.0.0" },
    "config": { "secure-http": false }
}
```

用 `dist` 前必须知道两件事（均为本机实测）：

1. **zip 与 tar.gz 的解包行为不同，必须用 zip**。
   - **zip（`ZipDownloader`）**：实测完整无损 —— 13,462 个文件全部安装到位（归档 13,462 → `vendor/` 13,462），
     最长的 165 字节文件名类 `class_exists()` 为 `true`，包体积 11MB。
     **唯一硬性要求：压缩包里必须有一个根目录**，该目录下直接放 `composer.json` 与 `src/`。
     Composer 会剥掉这层根目录再落到 `vendor/<包名>/`；若压缩包没有根目录（条目直接是 `src/Models/...`），
     会被剥掉 `src/` 这一层，装出来的结构错位、PSR-4 失效。
   - **tar.gz（`TarDownloader`，基于 `PharData`）**：实测**静默丢弃 242 个模型类** ——
     `src/Models/` 里有 242 个文件**文件名长度 ≥ 101 字节**（最长 165 字节），解包时全部丢失，
     实测装出来只有 13,217 / 13,459 个 php 文件，缺失的正是这些长名类，它们的 `class_exists()` 全为 `false`。
     **Gitea release 默认发的就是 tar.gz，直接拿来当 dist 会得到一个"少 242 个类"的坏包。**
2. Gitea 的 `/archive/<ref>.tar.gz` **不应用 `.gitattributes` 的 `export-ignore`**，实测仍包含 `tests/`、`tools/`、`docs/`、`.github/`。

**结论与配方**：要发 dist，就发 **zip**，且保证"单根目录 + composer.json + src/"的结构。
本仓库已加 `.gitattributes`（`export-ignore` 排除 `tests/`、`tools/`、`docs/`、`.github/` 等），
打包时把工作区按同一结构整理后压成 zip 即可：

```bash
# 在 SDK 仓库根执行：先按 export-ignore 裁剪，再压成"单根目录"的 zip
rm -rf /tmp/pkg && mkdir -p /tmp/pkg/oceanengine_php_sdk
git ls-files -z | tar --null -T - -cf - | tar -xf - -C /tmp/pkg/oceanengine_php_sdk
cd /tmp/pkg && zip -qr oceanengine_php_sdk.zip oceanengine_php_sdk
# 校验：文件数应与源一致，且最长名类可 autoload
unzip -l oceanengine_php_sdk.zip | tail -1
```

不想自己打包就直接用 **D1（git source）** 或 **A（path + symlink）**——两者都不经过解包，文件天然完整。

#### D3. 兜底：clone 源码 + 自写 autoloader

完全没有 Composer、或环境受限时的最后手段：

```bash
git clone http://gitea.example.com:3000/htmambo/oceanengine_php_sdk.git
cd oceanengine_php_sdk && git checkout 649f8ff31a33876e2f381566e34d99683bbe2953
```

```php
spl_autoload_register(static function (string $class): void {
    $prefix = 'Oceanengine\\';
    if (strncmp($class, $prefix, strlen($prefix)) === 0) {
        $file = __DIR__ . '/oceanengine_php_sdk/src/'
            . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
        if (is_file($file)) {
            require $file;
        }
    }
});
```

---

### 各通道实测数据汇总

环境：macOS、Composer 2.8.12、PHP 8.4.13、Gitea `http://gitea.example.com:3000`。

| 通道 | 结果 | 耗时 | 体积 | 备注 |
| --- | --- | --- | --- | --- |
| A. path + symlink | 成功 | 1.1s | 消费方 vendor 88 KB | SDK 0 拷贝；`.env`、`vendor/` 经软链接可达 |
| A'. path（无 symlink / 镜像） | 成功 | 19.6s | 68.5MB | 只复制 `src/` + 包元数据；`.env`、`vendor/`、`.git` 不复制 |
| B. Gitea Composer Registry | 端点可用，**包未发布**故安装失败 | 2.2s | — | 端点 HTTP 200，读元数据免 token |
| C. vcs + `.git` + `secure-http=false` | 成功 | 17.1s（首次冷启动 30.0s） | 74.7MB | 13,470 文件全到位 |
| C'. vcs + `.git`，未放开 http | 失败 | 1.0s | — | `Your configuration does not allow connections to http://...` |
| C''. vcs 无 `.git` | 看环境 | 18.3s / 0.4s / 121.4s | — | 有 git → 深层探测命中，也能装成功；无 git/svn → `No driver found...`；探测失败且 svn 在 PATH → `svn info` 挂死 |
| D1. package + source(git) | 成功 | 4.0s | 75MB | 版本号固定；文件全到位 |
| D2. package + dist(**zip**) | 成功，文件零丢失 | ~7s | 11MB | 压缩包须为「单根目录 + composer.json + src/」 |
| D2'. package + dist(**tar.gz**) | 可装但**丢 242 个长名模型类** | 3.0s | 68MB | PharData 解包限制，**不要用** |
| E. `git archive` 打包 | 成功 | 2.2s | 3.55MB | 应用 `.gitattributes` 后不含 `tests/` `tools/` `docs/` `.github/` |

> 表中 A / A' 两行是 `tools/install_check.sh --path-only` 的实测输出；C / C'' 两行是同一脚本全量模式的实测输出。体积一栏是消费方项目目录（含 `vendor/`）的 `du -sk` 值，软链接不计入。

想自己复跑这整套诊断：

```bash
bash tools/install_check.sh            # 全量通道（含网络）
bash tools/install_check.sh --path-only # 只测本地 path 通道（离线可用）
```

脚本只做只读操作，临时目录用 `mktemp -d` 并在结束时清理，不会打印任何凭据。

## 快速开始

```php
use Oceanengine\Client;
use Oceanengine\Configuration;

// 可选：自定义 host / scheme；默认 https://api.oceanengine.com
$configuration = new Configuration('api.oceanengine.com', 'https');

$client = Client::init($configuration);

// 每个请求都需要 Access-Token（oauth2 接口除外，其 token 是 query 参数）
$response = $client->accountFundGetV30Api()->get()
    ->accountIds([123456])
    ->accountType('AD')
    ->accessToken('YOUR_ACCESS_TOKEN')
    ->execute();
```

`Client::init()` 会自动注册鉴权 / 请求头 / 日志中间件。

## GET 示例：查询账号余额

```php
use Oceanengine\Models\AccountFundGetV30AccountType;
use Oceanengine\Models\AccountFundGetV30GrantTypeSplit;

$response = $client->accountFundGetV30Api()->get()
    ->accountIds([111, 222])                                  // 必填，1~50 个
    ->accountType(AccountFundGetV30AccountType::AD_AccountFundGetV30AccountType) // 必填，enum 常量
    ->grantTypeSplit(AccountFundGetV30GrantTypeSplit::ON_AccountFundGetV30GrantTypeSplit) // 选填
    ->accessToken('YOUR_ACCESS_TOKEN')
    ->execute();

$response->getCode();      // 0 表示成功
$list = $response->getData()->getList();  // AccountFundGetV30ResponseDataListInner[]
```

**必填校验**：`execute()` 开头会按 Go SDK 的校验规则检查参数，失败时抛出
`\InvalidArgumentException`，错误消息与 Go SDK 完全一致（例如
`accountIds is required and must be specified`、`accountIds must have at least 1 elements`）。

## POST 示例：推送素材给指定广告主

POST JSON body 接口接收一个 Request 模型对象：

```php
use Oceanengine\Models\FileMaterialBindV2Request;

$body = (new FileMaterialBindV2Request())
    ->setAdvertiserId(123456)
    ->setImageIds(['7000123'])
    ->setTargetAdvertiserIds([789]);

$response = $client->fileMaterialBindV2Api()->post()
    ->fileMaterialBindV2Request($body)   // fluent setter，属性名 = Go 字段名小驼峰
    ->accessToken('YOUR_ACCESS_TOKEN')
    ->execute();
```

Request 模型实现 `\JsonSerializable`，序列化为 snake_case JSON（`advertiser_id`、`image_ids` ...），null 字段自动跳过。

## 错误处理

```php
use Oceanengine\GenericOpenAPIError;

try {
    $response = $client->accountFundGetV30Api()->get()
        ->accountIds([111])
        ->accountType('AD')
        ->accessToken('BAD_TOKEN')
        ->execute();
} catch (GenericOpenAPIError $e) {
    $e->getStatusCode();  // HTTP 状态码，如 400
    $e->getBody();        // 原始响应体字符串
    $e->getModel();       // 非 2xx 时尝试用响应模型解析错误体（解析失败为 null）
}
```

三类异常：

- **非 2xx 响应**：抛出 `GenericOpenAPIError`；若错误体是合法 JSON，会尝试用该接口的响应模型
  `fromArray` 解析后填入 `getModel()`（解析失败则 model 为 null，不影响异常抛出）
- **响应体 JSON 解码失败**（2xx 但返回非 JSON）：抛出 `GenericOpenAPIError`，
  `getStatusCode()` 保留原状态码，`getBody()` 保留原文，`getMessage()` 含 `json_last_error_msg()`
- **参数校验失败**：抛出 `\InvalidArgumentException`（见 GET 示例）

## 中间件与日志

中间件签名：`fn(callable $next): callable`，返回的 callable 接收并回传请求上下文数组。

```php
// 请求级日志（单次请求）
$client->accountFundGetV30Api()->get()->withLog(true)/* ... */->execute();

// 全局日志开关
$client->setLogEnable(true);

// 自定义中间件
$client->use(static function (callable $next): callable {
    return static function (array $ctx) use ($next): array {
        // 修改 $ctx['headers']、$ctx['url'] 等
        return $next($ctx);
    };
});
```

`$client->getApiClient()->setTransport(callable)` 可替换 HTTP transport（用于测试），
transport 签名为 `fn(array $requestContext): array`，返回
`['statusCode' => int, 'headers' => array, 'body' => string]`。

## 文件上传

multipart 接口的文件参数类型为 `\Oceanengine\FormFileInfo`：

```php
$client->fileImageAdV2Api()->post()
    ->advertiserId(123456)
    ->imageFile(new \Oceanengine\FormFileInfo('image_file', '/path/to/pic.png', 'image/png'))
    ->filename('pic.png')
    ->accessToken('YOUR_ACCESS_TOKEN')
    ->execute();
```

`FormFileInfo` 构造参数：`fieldName`（表单字段名）、`filePath`（磁盘绝对路径）、`contentType`（MIME 类型）。
文件路径不存在时抛出 `\RuntimeException`（不会静默跳过）；multipart 表单值按 Go 语义序列化
（bool → `true`/`false`，数组/对象 → JSON）。

## 安全说明

- **日志掩码**：`LogMiddleware` 打印请求头时会对 `Access-Token` / `Authorization` 掩码
  （只保留前 4 个字符 + `***`），但请求体不含 token，请仍避免在 body 中放敏感信息
- **commonApi 路径限制**：`$client->commonApi()->get($path)` 等通用请求的 `$path` 必须以 `/` 开头
  （相对路径），否则抛出 `\InvalidArgumentException`，防止把 Access-Token 发送到任意 host
- **协议限制**：cURL transport 将请求与重定向限制在 HTTP(S) 协议内
- **重定向不携带凭证**：重定向由 SDK 手工跟随（cURL 的 `FOLLOWLOCATION` 关闭）。跟随到
  不同 origin（host / 端口 / 协议任一不同）时会先移除 `Access-Token`、`Authorization`、
  `Proxy-Authorization`、`Cookie` 再发出请求；跳转到非配置域名且未显式放行时直接抛错。
  最多跟随 5 跳（`Configuration::$maxRedirects`）
- **TLS 校验强制开启**：`SSL_VERIFYPEER` / `SSL_VERIFYHOST` 显式为真，不依赖平台默认值
- **目标主机白名单**：`prepareRequest()` 只接受相对路径或与 `Configuration::getBasePath()`
  同 origin 的绝对 URL；确需访问其它域名时显式开启 `$cfg->allowCrossHostRequests = true`

## 命名规则

- Go `Client.AccountFundGetV30Api()` → PHP `$client->accountFundGetV30Api()`（小驼峰）
- Go `service.Get(ctx)` / `Post(ctx)` → `$service->get()` / `post()`
- Go Request 字段 setter `AccountIds(...)` → `$request->accountIds(...)`
- 每个 Service 首次获取后在 Client 内缓存复用
- 通用请求：`$client->commonApi()->get('/open_api/.../')` / `->post($path)` / `->postMultipart($path)`，配合 `requestQuery()` / `requestBody()` / `requestForm()` / `requestFile()`

## 重试、限速与容错

批量提交广告时最怕两件事：被限流（HTTP 429）和瞬时故障（502/503/504、断网）。
这两件事现在由 SDK 自己扛，业务代码不用再套一层传输层。

### 重试（`RetryPolicy`）

```php
use Oceanengine\RetryPolicy;

$policy = RetryPolicy::default()
    ->withMaxAttempts(5)                       // 总尝试次数（含首次）
    ->withRetryableStatusCodes([429, 502, 503, 504])
    ->withRetryableMethods(['GET', 'HEAD', 'OPTIONS'])  // 默认只重试幂等方法
    ->withBaseDelayMs(200)                     // 指数退避基数
    ->withMaxDelayMs(5000)                     // 单次退避上限
    ->withRespectRetryAfter(true);             // 优先用响应头 Retry-After

$client->getApiClient()->setRetryPolicy($policy);
```

- **默认只重试幂等方法**：`POST`（建广告、改预算等）**默认不重试**，避免重复创建。
  批量提交若确认幂等，可用 `->withRetryableMethods(['GET', 'POST'])` 打开，或按请求显式声明：
  在请求上下文里带 `'retryable' => true`。
- **"结果不明"的失败一律不重放非幂等请求**（这是防重复投放的关键）：
  - *传输层错误*（超时、连接中断、响应没有状态码）——服务端可能已经建了广告，
    即使请求声明了 `retryable` 也不会重放；只有幂等方法会重试。
  - *网关类错误* 502 / 503 / 504——同样属于"结果不明"，`retryable` 也不放行；
    要放开必须用 `->withRetryableMethods(['GET', 'POST'])` 显式声明该方法可安全重放。
  - *明确拒绝* 429 等——服务端没有处理，重放是安全的，`retryable` 即可放行。
- **429 按 `Retry-After` 退避**：`Retry-After` 优先于指数退避，超出 `withMaxRetryAfterSeconds()`（默认 30s）会被夹住。
- **网络错误也会重试**：`performRequest()` 抛出的传输错误（statusCode=0）按可重试处理。
- **重试耗尽才抛错**：错误语义与原来一致（`GenericOpenAPIError` 保留 body 与 statusCode）。
- **观测**：传 `->withOnRetry(fn(int $attempt, int $delayMs, array $ctx) => ...)` 拿到每次重试的次数、等待时长与请求信息。

### 限速（`RateLimiter`）

```php
use Oceanengine\RateLimiter;

$client->getApiClient()->setRateLimiter(new RateLimiter(qps: 5, burst: 5));
// 或在 Configuration 上直接挂：
$configuration->rateLimiter = new RateLimiter(qps: 5);
```

令牌桶限速，超过 QPS 的请求会自动等待（不丢请求、不报错）。`qps <= 0` 表示不限速（默认）。
`getLastWaitMs()` 可读最近一次等待时长，便于做指标。

## token 生命周期与持久化

SDK 现在接管 token 的缓存、刷新与失效识别；**持久化**仍由你的应用决定（实现 `TokenStoreInterface` 接自己的 DB 即可）。

```php
use Oceanengine\ApiClient;
use Oceanengine\Configuration;
use Oceanengine\Token\CachingTokenProvider;
use Oceanengine\Token\OAuthTokenProvider;
use Oceanengine\Token\TokenStoreInterface;
use Oceanengine\Middleware\TokenMiddleware;

// 1) 取 token 的来源（用独立的 ApiClient，避免与 TokenMiddleware 递归）
$refreshClient = new ApiClient(new Configuration());
$oauth = new OAuthTokenProvider($refreshClient, 'app_access_token', [
    'app_id' => 1234567890,
    'secret' => 'YOUR_SECRET',
]);

// 2) 持久化（接自己的 DB；没有就用默认的进程内实现）
$store = new class implements TokenStoreInterface {
    public function get(string $key): ?array { /* 查 DB */ return null; }
    public function set(string $key, array $value): void { /* 写 DB */ }
    public function delete(string $key): void { /* 删 DB */ }
};

// 3) 缓存层：命中即用，过期提前 60s 刷新
$provider = new CachingTokenProvider($oauth, $store, 'default', refreshSkewSeconds: 60);

// 4) 挂到客户端：自动注入 Access-Token，并在 token 失效时刷新后重放
$client->getApiClient()->addMiddleware(new TokenMiddleware($provider, invalidTokenCodes: [40103]));
```

- **失效识别**：业务响应 `code` 命中 `invalidTokenCodes`（默认 `40103`，可配置）→ `invalidate()` → 重新取 token → **重放一次**。
  其它业务错误（如 `40002`）不会触发重放。
- **refresh 轮换**：`OAuthTokenProvider` 的 `renew_token` / `refresh_token` 模式会取到新的 `refresh_token` 并写回 store，实现轮换。
- **token 不外泄**：token 不会出现在任何日志、异常消息或 store 键名里；`skipTokenMiddleware` 上下文标记可让刷新请求跳过本中间件。
- **已有调用方式不受影响**：不挂 `TokenMiddleware` 时，行为与之前完全一致（仍可用 `->accessToken('...')` 手动传）。

### 多 worker / 多进程部署（重要）

`refresh_token` 是**一次性**的：刷新后旧值立即失效。两个 worker 同时刷新，
后到的一方会拿到已作废的凭证，会话就此永久失效。SDK 用三层机制规避：

1. **单飞刷新**：存储实现了 `Oceanengine\Token\TokenLockInterface`（`acquire` / `release`）时，
   刷新会串行化——拿不到锁就等，等到锁后**二次检查**缓存，多半能直接复用别人刚刷出的 token。
2. **拿不到锁就不刷新**：等锁超时（默认 5s）抛 `TokenLockTimeoutException`，
   **不会**绕过锁去刷新（那正是会话失效的根因）。调用方应退避后重试。
3. **刷新成功即落库**：轮换成功后无条件写库，不做"较新者优先"判断——
   任何客户端侧的比较都可能因时钟偏差把唯一有效的 refresh_token 丢掉。
   若落库本身失败，抛 `TokenPersistenceException`，它携带**未落库的记录**供你立即补偿写入。

`TokenStoreInterface` 的实现方建议同时实现 `TokenLockInterface`（MySQL 用 `GET_LOCK()` 或行锁，
Redis 用 `SET NX` + 持有者标识）。`release()` 必须校验持有者再释放，否则持有者卡顿超时后
会误删后继者的锁。SDK 自带的 `InMemoryTokenStore` 已实现该接口（`flock` + 同进程重入保护），
单机或测试场景可直接用。

## 真实接口联调

`tests/integration.php` 用真实 HTTP 请求跑一条**只读**场景链，验证 SDK 与开放平台的实际联调效果。
脚本绝不调用任何写接口（取 token / 查账户 / 查计划 / 查报表 / 查余额）。

### 1. 配置凭证

在仓库根目录创建 `.env`（模板见 [.env.example](.env.example)）：

```bash
cp .env.example .env
```

然后填写真实值：

```dotenv
APP_ID=1234567890
SECRET=你的应用秘钥
```

支持的配置项（`.env` 与进程环境变量都可以，**进程环境变量优先**，便于 CI 注入）：

- `APP_ID`：必填，应用 ID，必须是数字
- `SECRET`：必填，应用秘钥（兼容历史拼写 `SECERT`）
- `AUTH_CODE`：选填，广告主授权回调带回的 `auth_code`，用于换取**广告主级** access token；不填则跳过该场景
- `ADVERTISER_ID`：选填，指定广告主；优先于授权列表与 `auth_code` 响应里的 `advertiser_ids`
- `ACCOUNT_IDS`：选填，逗号分隔的账户 ID；不填则跳过「账户余额」场景
- `START_DATE` / `END_DATE`：选填，报表区间（`YYYY-MM-DD`）；`END_DATE` 默认昨天，`START_DATE` 默认 `END_DATE` 前 6 天
- `API_HOST` / `API_SCHEME`：选填，默认 `api.oceanengine.com` / `https`
- `TIMEOUT`：选填，单请求超时秒数，默认 60
- `STRICT`：选填，设为 `1` 时缺少凭证直接以退出码 2 结束（CI 严格模式）
- `OCEANENGINE_ENV_FILE`：选填，指向其它 `.env` 文件（默认仓库根目录 `.env`）

进阶覆盖项（不写就用默认值）：`ACCOUNT_TYPE`（账户类型，默认 `AD`）、`REPORT_FIELDS`（报表指标，逗号分隔，默认 `cost,click,convert`）。

### 2. 两种 access token 的区别

开放平台有两类凭证，脚本会把它们分开对待：

- **app 级 access_token**：`POST /open_api/oauth2/app_access_token/`，用 `APP_ID` + `SECRET` 换取，
  代表「应用」身份，用于应用级接口（如查应用下的授权账户）。
- **广告主级 access_token**：`POST /open_api/oauth2/access_token/`，用 `APP_ID` + `SECRET` + `auth_code` 换取，
  代表「广告主」身份，**业务接口（广告主信息 / 计划 / 报表 / 余额）应当使用这个 token**。

`auth_code` 的来源：广告主在开放平台完成授权后，授权回调 URL 会带回 `auth_code` 参数，把它填进 `.env` 的
`AUTH_CODE` 即可。开发者快速入门见
[开放平台文档](https://open.oceanengine.com/labels/7/docs/1696710498372623)。

脚本的取值优先级：

- 业务接口的 token：广告主级 token（拿到时）→ app 级 token
- `advertiser_id`：`.env` 的 `ADVERTISER_ID` → 广告主级 token 响应里的 `advertiser_ids[0]` → 授权列表首个

### 3. 执行

```bash
php tests/integration.php        # 或 composer test:integration / make integration
```

输出形如：

```text
[INFO] 被测地址：https://api.oceanengine.com（超时 60s，报表区间 2026-10-16 ~ 2026-10-22）
[PASS] 取 app access token — token=abc123***，有效期 86400s（186ms）
[PASS] 广告主级 access_token（auth_code 换取） — access_token=xyz789***，有效期 86400s，广告主数 1（210ms）
[PASS] 授权广告主列表 — 授权账户数 3，使用 advertiser_id=1234567890（92ms）
...
[RESULT] 通过 7，跳过 0，失败 0
```

### 4. 场景清单

1. **取 app access token** — `POST /open_api/oauth2/app_access_token/`，取 `access_token` 与有效期
2. **广告主级 access_token（auth_code 换取）** — `POST /open_api/oauth2/access_token/`，取广告主级 token、
   `advertiser_ids` 与有效期（未配置 `AUTH_CODE` 时跳过）
3. **授权广告主列表** — `GET /open_api/oauth2/advertiser/get/`，取授权账户 ID（token 走 query 参数，与 Go SDK 一致）
4. **广告主信息** — `GET /open_api/2/advertiser/info/`
5. **广告（计划）列表** — `GET /open_api/v3.0/promotion/list/`
6. **投放数据（广告报表）** — `GET /open_api/2/report/ad/get/`
7. **账户余额** — `GET /open_api/v3.0/account/fund/get/`（未配置 `ACCOUNT_IDS` 时跳过）

行为约定：

- 每个场景都断言响应 `code === 0`，非 0 判 FAIL 并打印 `message` 与 `request_id`
- 业务场景（4~7）拿不到 token 或 `advertiser_id` 时标记 SKIP，不算失败；摘要会区分
  「无 access token」与「no authorized advertisers（该应用未授权任何广告主…）」
- 遇到 HTTP 429 限流会自动等待 2 秒后重试**一次**，仍失败才判 FAIL
- 缺凭证（且未开启 `STRICT`）时全部场景 SKIP，并以退出码 0 结束，方便在无凭证的机器上安全运行
- **CI 中建议开启 `STRICT=1`**：否则「凭证没配好」会退化为全 SKIP + 退出码 0，让流水线在零覆盖的情况下显示为通过（`STRICT=1` 时缺凭证直接以退出码 2 失败）

### 5. 退出码

- `0`：全部通过（或因缺凭证而全部跳过）
- `1`：存在 FAIL 场景
- `2`：配置错误（`APP_ID` 非数字、日期区间非法、`STRICT` 模式下缺凭证等）

### 6. 本地 mock 联调（不消耗配额）

仓库自带假服务端，返回结构与真实接口一致的 JSON：

```bash
php -S 127.0.0.1:8799 tests/_mock_server.php
# 另一个终端
API_HOST=127.0.0.1:8799 API_SCHEME=http APP_ID=1234567890 SECRET=dummy-secret \
  AUTH_CODE=mock-code ACCOUNT_IDS=123456789 php tests/integration.php
```

假服务端支持故障注入，用于验证脚本的失败路径：`MOCK_FAIL=report`（返回业务错误码）、
`MOCK_429=report`（首次返回 HTTP 429）。

### 7. 常见错误

- **401 / 鉴权失败**：`APP_ID` 与 `SECRET` 不匹配，或应用未开通对应 API 权限；确认后重跑
- **「授权账户数 0」**：该应用在开放平台**没有授权任何广告主**，因此拿不到 `advertiser_id`，业务场景会被跳过。
  解决办法二选一：① 在开放平台完成广告主授权，把回调里的 `auth_code` 填进 `.env` 的 `AUTH_CODE`
  （业务接口改用广告主级 token）；② 已知广告主 ID 时，直接在 `.env` 配置 `ADVERTISER_ID`
- **权限不足（code != 0，message 含「无权限」等）**：当前凭证没有该广告主的权限；确认 `AUTH_CODE`
  对应的广告主，或改用已授权的 `ADVERTISER_ID`
- **429 限流**：脚本已内置「等待 2 秒重试一次」；仍失败说明配额已用尽，稍后再跑
- **日期区间错误**：`START_DATE` 必须不晚于 `END_DATE`，且格式为 `YYYY-MM-DD`；不配置时默认取
  最近 7 天（截止昨天）
- **账户余额场景 SKIP**：未配置 `ACCOUNT_IDS`，补上即可

### 8. 凭证安全

- `.env` 已在 `.gitignore` 中，**不会被提交**；请只提交 `.env.example`
- 脚本不会打印 `SECRET`、`AUTH_CODE`，也不会打印完整的 access token / refresh token：
  输出中的 token 一律脱敏为「前 6 位 + `***`」
- 排查问题时可直接把联调输出贴到工单 / issue 里

## 与上游同步

本 PHP SDK 由上游 [`ad_open_sdk_go`](https://github.com/oceanengine/ad_open_sdk_go) 全量转译生成，
上游是唯一事实来源；`src/Models/`、`src/Api/`、`src/Client.php` 请勿手工修改，会被下次生成覆盖。

上游发布新版本后，用下面两条命令完成同步与校验（在本仓库根目录执行）：

```bash
make sync    # 拉取上游 → 重新生成 → parity 校验 → php -l → 冒烟测试 → 写 CHANGELOG
make check   # 只读校验：上游是否有更新 + parity + lint + test（不改工作区）
```

等价的 Composer 脚本：

```bash
composer sync     # 同 make sync
composer check    # 同 make check
composer parity   # 仅 Go ↔ PHP 一致性校验
composer lint     # 仅全量 php -l
composer test     # 仅冒烟测试
composer test:integration  # 仅真实接口联调（需 .env 凭证与外网）
```

**上游路径**：默认取同级目录 `../ad_open_sdk_go`，可用环境变量或参数覆盖：

```bash
OCEANENGINE_UPSTREAM=/path/to/ad_open_sdk_go make sync
make sync UPSTREAM=/path/to/ad_open_sdk_go
```

**CI**：`.github/workflows/sync-upstream.yml` 每周定时 + 手动触发，checkout 上游后执行同步，
有文件变更时自动开 PR（不会自动合并）。

详细说明（目录布局、手工三步同步、CI 行为、版本与发布、常见问题排查）见
[`docs/UPSTREAM_SYNC.md`](docs/UPSTREAM_SYNC.md)。

## 说明

- 代码由 `tools/go2php/` 转译器从 Go SDK 生成，请勿手工修改 `src/Api/` 与 `src/Client.php`
- Go SDK 的 `examples/` 未逐一生成；各接口用法可对照 Go 同名文件的注释（已转译进 PHP 类与方法 docblock）
- 冒烟测试：`php tests/smoke.php`（无框架、可离线运行）；核心层测试：`php tests/_core_smoke.php`
- 真实接口联调：`php tests/integration.php`（需 `.env` 凭证与外网，详见「真实接口联调」）
- 本项目是官方 Go SDK 的衍生作品，遵循与上游相同的 Apache-2.0 许可
