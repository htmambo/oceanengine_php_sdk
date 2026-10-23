# Changelog

本文件记录 `oceanengine/ad_open_sdk_php` 的变更。PHP SDK 由
[`oceanengine/ad_open_sdk_go`](https://github.com/oceanengine/ad_open_sdk_go) 转译生成，
上游版本是唯一事实来源；同步流程（`make sync` / `python3 tools/go2php/sync.py`）
会自动按上游版本在本文件中追加条目。

格式参考 [Keep a Changelog](https://keepachangelog.com/zh-CN/1.1.0/)，
版本号与上游 Go SDK 保持一致。

## [1.1.97] - 初始版本

### 新增

- 由上游 `ad_open_sdk_go` v1.1.97 全量转译生成：模型类、API Service 与 Request builder
  （覆盖情况见 README 的「API 覆盖率 100%」说明）。
- 零第三方依赖的 HTTP 客户端（`ext-curl` / `ext-json`）、可插拔中间件链、可注入 transport。
- 上游同步机制与 CI 自动检查（见 `docs/UPSTREAM_SYNC.md`）。

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
