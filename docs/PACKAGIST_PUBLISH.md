# 发布到 Packagist

本仓库已满足 Packagist 的全部收录条件（`composer validate --strict` 通过）：

- 公开 GitHub 仓库：`https://github.com/htmambo/oceanengine_php_sdk`
- 包名：`htmambo/oceanengine_php_sdk`（vendor 与 GitHub 账号一致）
- `composer.json`：description / license(Apache-2.0) / type(library) / PSR-4 / require(php>=8.0, ext-curl, ext-json) 齐备
- `LICENSE` 文件存在
- 已打版本 tag：`v1.0.0`

## 1. 提交收录（一次性，需 Packagist 账号）

1. 打开 <https://packagist.org/packages/submit>，用 **GitHub 账号**登录（与仓库同账号 `htmambo` 最省事）。
2. 在 **Repository URL** 输入：
   ```
   https://github.com/htmambo/oceanengine_php_sdk
   ```
3. 点 **Check**，确认识别到包名 `htmambo/oceanengine_php_sdk` 后点 **Submit**。

> Packagist 没有匿名提交 API，这一步必须在网页上完成（登录态在浏览器里）。
> 若提示"包名与仓库不符"，说明 `composer.json` 的 `name` 与 GitHub 仓库名不一致——本仓库已对齐。

## 2. 配置自动更新（提交后必做）

提交后，Packagist 只在你**手动触发**或**收到 webhook**时才更新版本。
到包页面（`https://packagist.org/packages/htmambo/oceanengine_php_sdk`）点 **Auto-update**，
按提示拿到 webhook URL（形如 `https://packagist.org/api/github?username=htmambo`）与 secret，然后：

1. GitHub 仓库 → **Settings → Webhooks → Add webhook**
2. **Payload URL**：填 Packagist 给的地址
3. **Content type**：`application/json`
4. **Secret**：填 Packagist 给的 secret
5. **Which events**：选 **Just the push event**
6. 保存后点 **Test delivery**，确认返回 200

这样每次 `git push`（含新 tag）Packagist 会自动收录新版本，无需手动操作。

## 3. 收录后的使用方式

**消费方不再需要任何 repository 配置**，也不需要 token：

```bash
composer require htmambo/oceanengine_php_sdk
```

或指定大版本：

```bash
composer require htmambo/oceanengine_php_sdk:^1.0
```

`composer.json` 里只需：

```json
{
    "require": {
        "htmambo/oceanengine_php_sdk": "^1.0"
    }
}
```

## 4. 后续发版节奏

1. 上游 Go SDK 更新后：`make sync`（重生成 + parity + lint + 测试 + CHANGELOG）
2. 审阅 `git diff`，提交并推送
3. 打 tag：`git tag -a v1.1.0 -m "..." && git push origin v1.1.0`
4. webhook 触发后 Packagist 自动收录；消费方 `composer update` 即可升级

> 建议版本号与上游 Go SDK 对齐（如上游 v1.1.98 → 本包 v1.1.98），便于对照。
> 破坏性变更（如本次包名更名）按 SemVer 应升大版本。

## 5. 常见卡点

- **提交时提示包已存在**：说明同名包已被他人收录，只能改名或联系 Packagist 处理。
- **新版本不出现**：检查 webhook 是否配置、GitHub delivery 是否 200、Packagist 是否还在同步队列。
- **私有仓**：Packagist 只收公开仓；私有仓请继续用 VCS + token 或 dist 方式（见 README 安装章节）。
