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
└── .github/workflows/     # CI：定时检查上游并自动开 PR
```

> `src/Api/`、`src/Models/`、`src/Client.php` 由转译器生成，**请勿手工修改**，会在下次同步时被覆盖。
>
> `.env`（联调凭证）已被 `.gitignore` 忽略，请勿提交；模板见 [.env.example](.env.example)。

## 安装

### 方式一：Composer VCS 仓库（推荐）

在你的项目 `composer.json` 中：

```json
{
    "repositories": [
        { "type": "vcs", "url": "http://gitea.example.com:3000/htmambo/oceanengine_php_sdk.git" }
    ],
    "require": {
        "htmambo/oceanengine_php_sdk": "*"
    }
}
```

然后 `composer update htmambo/oceanengine_php_sdk`。

### 方式二：本地 path 仓库

```json
{
    "repositories": [
        { "type": "path", "url": "../ad_open_sdk_php" }
    ],
    "require": {
        "htmambo/oceanengine_php_sdk": "*"
    }
}
```

### 方式三：直接拷贝源码 + 简易 autoloader

```php
spl_autoload_register(static function (string $class): void {
    $prefix = 'Oceanengine\\';
    if (strncmp($class, $prefix, strlen($prefix)) === 0) {
        $file = __DIR__ . '/ad_open_sdk_php/src/'
            . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
        if (is_file($file)) {
            require $file;
        }
    }
});
```

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
