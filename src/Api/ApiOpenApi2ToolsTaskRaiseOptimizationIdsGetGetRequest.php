<?php

/**
 * 本文件由 go2php 生成，源: api_tools_task_raise_optimization_ids_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询优选起量状态
 */
class ApiOpenApi2ToolsTaskRaiseOptimizationIdsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $platformVersion = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsTaskRaiseOptimizationIdsGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function platformVersion(string $platformVersion): self
    {
        $this->platformVersion = $platformVersion;
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
     * 查询优选起量状态
     */
    public function execute(): \Oceanengine\Models\ToolsTaskRaiseOptimizationIdsGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->platformVersion !== null) {
            $queryParams['platform_version'] = $this->platformVersion;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/tools/task_raise/optimization_ids/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsTaskRaiseOptimizationIdsGetV2Response::class);

        return $result['model'];
    }
}
