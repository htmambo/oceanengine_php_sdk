<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rta_status_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改RTA策略状态
 */
class ApiOpenApi2ToolsRtaStatusUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsRtaStatusUpdateV2Request $toolsRtaStatusUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsRtaStatusUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsRtaStatusUpdateV2Request(\Oceanengine\Models\ToolsRtaStatusUpdateV2Request $toolsRtaStatusUpdateV2Request): self
    {
        $this->toolsRtaStatusUpdateV2Request = $toolsRtaStatusUpdateV2Request;
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
     * 修改RTA策略状态
     */
    public function execute(): \Oceanengine\Models\ToolsRtaStatusUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsRtaStatusUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/rta/status_update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsRtaStatusUpdateV2Response::class);

        return $result['model'];
    }
}
