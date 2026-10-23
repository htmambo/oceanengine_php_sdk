<?php

/**
 * 本文件由 go2php 生成，源: api_tools_region_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取地域列表
 */
class ApiOpenApi2ToolsRegionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $regionLevel = null;
    private ?string $regionType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsRegionGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function regionLevel(string $regionLevel): self
    {
        $this->regionLevel = $regionLevel;
        return $this;
    }

    public function regionType(string $regionType): self
    {
        $this->regionType = $regionType;
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
     * 获取地域列表
     */
    public function execute(): \Oceanengine\Models\ToolsRegionGetV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->regionLevel !== null) {
            $queryParams['region_level'] = $this->regionLevel;
        }
        if ($this->regionType !== null) {
            $queryParams['region_type'] = $this->regionType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/region/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsRegionGetV2Response::class);

        return $result['model'];
    }
}
