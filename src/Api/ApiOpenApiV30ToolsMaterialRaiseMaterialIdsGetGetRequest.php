<?php

/**
 * 本文件由 go2php 生成，源: api_tools_material_raise_material_ids_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取起量中素材列表
 */
class ApiOpenApiV30ToolsMaterialRaiseMaterialIdsGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告账户ID */
    private ?int $advertiserId = null;
    /** @var int 起量任务ID */
    private ?int $scheduleId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ToolsMaterialRaiseMaterialIdsGetV30ApiService $service)
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
     * 起量任务ID
     */
    public function scheduleId(int $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
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
     * 获取起量中素材列表
     */
    public function execute(): \Oceanengine\Models\ToolsMaterialRaiseMaterialIdsGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->scheduleId === null) {
            throw new \InvalidArgumentException('scheduleId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['schedule_id'] = $this->scheduleId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/tools/material_raise/material_ids/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ToolsMaterialRaiseMaterialIdsGetV30Response::class);

        return $result['model'];
    }
}
