#!/usr/bin/env python3
"""go2php client translator.

Rewrites <out>/src/Client.php (namespace Oceanengine) from
<upstream>/client.go. Every `func (c *Client) XxxApi() *api.YyyApiService`
getter becomes a lazy getService() wrapper; the handwritten core surface
(init / getApiClient / getConfig / getService) is emitted here so the file is
complete and self-consistent.

The upstream checkout and the output package are resolved by common.py:
``--upstream`` / ``--out`` first, then ``OCEANENGINE_UPSTREAM`` /
``OCEANENGINE_OUT``, then the default layout next to this package.
"""

import os
import re
import sys

TOOLS_DIR = os.path.dirname(os.path.abspath(__file__))
if TOOLS_DIR not in sys.path:
    sys.path.insert(0, TOOLS_DIR)

import common  # noqa: E402
import sync_meta  # noqa: E402

RE_GETTER = re.compile(r"^func \(c \*Client\) (\w+)\(\) \*api\.(\w+)(?: \{| \{)?$", re.M)


def lcfirst(name):
    return name[0].lower() + name[1:] if name else name


def main(argv=None):
    opts = common.parse_common_args(argv)
    go_client = os.path.join(opts["upstream"], "client.go")
    out_file = os.path.join(opts["out"], "src", "Client.php")

    with open(go_client, encoding="utf-8") as fh:
        src = fh.read()

    getters = RE_GETTER.findall(src)
    if not getters:
        print("no getters found in client.go", file=sys.stderr)
        return 1

    lines = []
    lines.append("<?php")
    lines.append("")
    lines.append("/**")
    lines.append(" * 本文件由 go2php 生成，源: client.go")
    lines.append(" */")
    lines.append("")
    lines.append("declare(strict_types=1);")
    lines.append("")
    lines.append("namespace Oceanengine;")
    lines.append("")
    lines.append("class Client")
    lines.append("{")
    lines.append("    private \\Oceanengine\\ApiClient $apiClient;")
    lines.append("")
    lines.append("    private \\Oceanengine\\Configuration $configuration;")
    lines.append("")
    lines.append("    /** @var array<string, object> */")
    lines.append("    private array $services = [];")
    lines.append("")
    lines.append("    private function __construct(\\Oceanengine\\Configuration $configuration)")
    lines.append("    {")
    lines.append("        $this->configuration = $configuration;")
    lines.append("        $this->apiClient = new \\Oceanengine\\ApiClient($configuration);")
    lines.append("    }")
    lines.append("")
    lines.append("    /**")
    lines.append("     * 创建客户端并注册默认中间件。")
    lines.append("     *")
    lines.append("     * 生成的 Api 层传入相对 URL（如 /open_api/...），此处注册的中间件负责")
    lines.append("     * 拼接 Configuration::getBasePath() 并将全局 logEnable 合并进请求上下文。")
    lines.append("     */")
    lines.append("    public static function init(?\\Oceanengine\\Configuration $configuration = null): self")
    lines.append("    {")
    lines.append("        $client = new self($configuration ?? new \\Oceanengine\\Configuration());")
    lines.append("        $client->apiClient->addMiddleware(new \\Oceanengine\\Middleware\\AuthMiddleware());")
    lines.append("        $client->apiClient->addMiddleware(new \\Oceanengine\\Middleware\\HeaderMiddleware($client->configuration));")
    lines.append("        if ($client->configuration->useLogMw) {")
    lines.append("            $client->apiClient->addMiddleware(new \\Oceanengine\\Middleware\\LogMiddleware());")
    lines.append("        }")
    lines.append("        $configuration = $client->configuration;")
    lines.append("        $client->apiClient->addMiddleware(static function (callable $next) use ($configuration): callable {")
    lines.append("            return static function (array $requestContext) use ($next, $configuration): array {")
    lines.append("                $url = (string)($requestContext['url'] ?? '');")
    lines.append("                if ($url !== '' && $url[0] === '/') {")
    lines.append("                    $requestContext['url'] = $configuration->getBasePath() . $url;")
    lines.append("                }")
    lines.append("                if ($configuration->logEnable) {")
    lines.append("                    $requestContext['enableLog'] = true;")
    lines.append("                }")
    lines.append("                $response = $next($requestContext);")
    lines.append("                // 二进制下载接口：核心层 call() 只回传 fromArray 解码结果，")
    lines.append("                // 这里把原始响应体 base64 包装后交给 BinaryResponse::fromArray 还原")
    lines.append("                if (($requestContext['responseType'] ?? null) === 'binary' && array_key_exists('body', $response)) {")
    lines.append("                    $response['body'] = json_encode(['_b' => base64_encode((string)$response['body'])]);")
    lines.append("                }")
    lines.append("                return $response;")
    lines.append("            };")
    lines.append("        });")
    lines.append("        return $client;")
    lines.append("    }")
    lines.append("")
    lines.append("    public function getApiClient(): \\Oceanengine\\ApiClient")
    lines.append("    {")
    lines.append("        return $this->apiClient;")
    lines.append("    }")
    lines.append("")
    lines.append("    public function getConfig(): \\Oceanengine\\Configuration")
    lines.append("    {")
    lines.append("        return $this->configuration;")
    lines.append("    }")
    lines.append("")
    lines.append("    public function addDefaultHeader(string $key, string $value): self")
    lines.append("    {")
    lines.append("        $this->configuration->defaultHeader[$key] = $value;")
    lines.append("        return $this;")
    lines.append("    }")
    lines.append("")
    lines.append("    public function setLogEnable(bool $enable): self")
    lines.append("    {")
    lines.append("        $this->configuration->logEnable = $enable;")
    lines.append("        return $this;")
    lines.append("    }")
    lines.append("")
    lines.append("    public function use(callable ...$middlewares): self")
    lines.append("    {")
    lines.append("        foreach ($middlewares as $middleware) {")
    lines.append("            $this->apiClient->addMiddleware($middleware);")
    lines.append("        }")
    lines.append("        return $this;")
    lines.append("    }")
    lines.append("")
    lines.append("    /**")
    lines.append("     * @template T of object")
    lines.append("     * @param class-string<T> $class")
    lines.append("     * @return T")
    lines.append("     */")
    lines.append("    private function getService(string $name, string $class)")
    lines.append("    {")
    lines.append("        if (!isset($this->services[$name])) {")
    lines.append("            $this->services[$name] = new $class($this->apiClient);")
    lines.append("        }")
    lines.append("        return $this->services[$name];")
    lines.append("    }")
    lines.append("")

    for go_name, svc in getters:
        fqcn = "\\Oceanengine\\Api\\" + svc
        lines.append("    public function %s(): %s" % (lcfirst(go_name), fqcn))
        lines.append("    {")
        lines.append("        return $this->getService('%s', %s::class);" % (go_name, fqcn))
        lines.append("    }")
        lines.append("")

    lines.pop()  # trailing blank
    lines.append("}")
    lines.append("")

    os.makedirs(os.path.dirname(out_file), exist_ok=True)
    with open(out_file, "w", encoding="utf-8") as fh:
        fh.write("\n".join(lines))

    sync_meta.sync_metadata(argv)

    print("getters written: %d -> %s" % (len(getters), out_file))
    return 0


if __name__ == "__main__":
    sys.exit(main())
