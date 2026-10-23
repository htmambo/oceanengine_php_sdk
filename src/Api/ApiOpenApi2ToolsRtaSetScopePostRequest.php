<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rta_set_scope_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 设置广告账户下某个RTA策略的生效范围，设置一个新的RTA策略时，默认为停用状态，需要继续调用修改RTA策略状态
 */
class ApiOpenApi2ToolsRtaSetScopePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsRtaSetScopeV2Request $toolsRtaSetScopeV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsRtaSetScopeV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsRtaSetScopeV2Request(\Oceanengine\Models\ToolsRtaSetScopeV2Request $toolsRtaSetScopeV2Request): self
    {
        $this->toolsRtaSetScopeV2Request = $toolsRtaSetScopeV2Request;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * 设置广告账户下某个RTA策略的生效范围，设置一个新的RTA策略时，默认为停用状态，需要继续调用修改RTA策略状态
     */
    public function execute(): \Oceanengine\Models\ToolsRtaSetScopeV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsRtaSetScopeV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/rta/set_scope/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsRtaSetScopeV2Response::class);

        return $result['model'];
    }
}
