<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_life_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 该接口用于获取广告主的本地推线索列表。
 */
class ApiOpenApi2ToolsClueLifeGetPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ToolsClueLifeGetV2Request $toolsClueLifeGetV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsClueLifeGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function toolsClueLifeGetV2Request(\Oceanengine\Models\ToolsClueLifeGetV2Request $toolsClueLifeGetV2Request): self
    {
        $this->toolsClueLifeGetV2Request = $toolsClueLifeGetV2Request;
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
     * 该接口用于获取广告主的本地推线索列表。
     */
    public function execute(): \Oceanengine\Models\ToolsClueLifeGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->toolsClueLifeGetV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/clue/life/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsClueLifeGetV2Response::class);

        return $result['model'];
    }
}
