# 巨量引擎开放平台 OpenAPI SDK for PHP

由 [`ad_open_sdk_go`](https://github.com/oceanengine/ad_open_sdk_go)（API version 1.1.97）全自动转译生成的 PHP SDK。

- **API 覆盖率 100%**：1261 个 API Service / 1261 个 Request builder，与 Go SDK 一一对应
- **10917 个模型类**：enum 常量类 + struct DTO（`jsonSerialize` / `fromArray`）
- **零第三方依赖**：仅需 PHP >= 8.0、`ext-curl`、`ext-json`
- **可测试**：HTTP transport 可注入（`ApiClient::setTransport`），方便 fake 测试
- **中间件链**：鉴权、请求头、日志均为可插拔中间件

## 安装

本仓库包含 `composer.json`（PSR-4：`Oceanengine\` → `src/`）。

**方式一：作为 path 仓库引入**

在你的项目 `composer.json` 中：

```json
{
    "repositories": [
        { "type": "path", "url": "../oceanengine/ad_open_sdk_php" }
    ],
    "require": {
        "oceanengine/ad_open_sdk_php": "*"
    }
}
```

**方式二：直接拷贝 + 简易 autoloader**

```php
spl_autoload_register(static function (string $class): void {
    $prefix = 'Oceanengine\\';
    if (strncmp($class, $prefix, strlen($prefix)) === 0) {
        $file = __DIR__ . '/ad_open_sdk_php/src/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
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

## 与上游同步

本 PHP SDK 由上游 [`ad_open_sdk_go`](https://github.com/oceanengine/ad_open_sdk_go) 全量转译生成，
上游是唯一事实来源；`src/Models/`、`src/Api/`、`src/Client.php` 请勿手工修改，会被下次生成覆盖。
上游发布新版本后，用下面两条命令完成同步与校验：

```bash
make sync    # 拉取上游 → 重新生成 → parity 校验 → php -l → 冒烟测试 → 写 CHANGELOG
make check   # 只读校验：上游是否有更新 + parity + lint + test（不改工作区）
```

详细说明（目录布局、手工三步同步、CI 行为、版本与发布、常见问题排查）见
[`docs/UPSTREAM_SYNC.md`](docs/UPSTREAM_SYNC.md)。

## 说明

- 代码由 `tools/go2php/` 转译器从 Go SDK 生成，请勿手工修改 `src/Api/` 与 `src/Client.php`
- Go SDK 的 `examples/` 未逐一生成；各接口用法可对照 Go 同名文件的注释（已转译进 PHP 类与方法 docblock）
- 冒烟测试：`php ad_open_sdk_php/tests/smoke.php`（无框架、可离线运行）；核心层测试：`php ad_open_sdk_php/tests/_core_smoke.php`
