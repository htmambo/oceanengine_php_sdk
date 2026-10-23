<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_abnormal_assets_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerAbnormalAssetsGetV30ApiService
{
    private \Oceanengine\ApiClient $apiClient;

    public function __construct(\Oceanengine\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient(): \Oceanengine\ApiClient
    {
        return $this->apiClient;
    }

    /**
     * 此接口用于查询事件管理异常的应用类资产信息
     */
    public function get(): ApiOpenApiV30EventManagerAbnormalAssetsGetGetRequest
    {
        return new ApiOpenApiV30EventManagerAbnormalAssetsGetGetRequest($this);
    }
}
