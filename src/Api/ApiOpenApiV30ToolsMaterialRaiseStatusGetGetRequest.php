<?php

/**
 * 本文件由 go2php 生成，源: api_tools_material_raise_status_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取素材起量状态
 */
class ApiOpenApiV30ToolsMaterialRaiseStatusGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户ID */
    private ?int $advertiserId = null;
    /** @var int[] 项目IDs */
    private ?array $projectIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMaterialRaiseStatusGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告账户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 项目IDs
     */
    public function projectIds(array $projectIds): self
    {
        $this->projectIds = $projectIds;
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
     * 获取素材起量状态
     */
    public function execute(): \Oceanengine\Models\ToolsMaterialRaiseStatusGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->projectIds === null) {
            throw new \InvalidArgumentException('projectIds is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['project_ids'] = $this->projectIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/material_raise_status/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMaterialRaiseStatusGetV30Response::class);

        return $result['model'];
    }
}
