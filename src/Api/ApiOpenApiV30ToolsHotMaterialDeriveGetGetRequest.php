<?php

/**
 * 本文件由 go2php 生成，源: api_tools_hot_material_derive_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 爆款裂变任务查询
 */
class ApiOpenApiV30ToolsHotMaterialDeriveGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $taskIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsHotMaterialDeriveGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function taskIds(array $taskIds): self
    {
        $this->taskIds = $taskIds;
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
     * 爆款裂变任务查询
     */
    public function execute(): \Oceanengine\Models\ToolsHotMaterialDeriveGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->taskIds === null) {
            throw new \InvalidArgumentException('taskIds is required and must be specified');
        }
        if (count($this->taskIds) < 1) {
            throw new \InvalidArgumentException('taskIds must have at least 1 elements');
        }
        if (count($this->taskIds) > 50) {
            throw new \InvalidArgumentException('taskIds must have less than 50 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['task_ids'] = $this->taskIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/hot_material_derive/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsHotMaterialDeriveGetV30Response::class);

        return $result['model'];
    }
}
