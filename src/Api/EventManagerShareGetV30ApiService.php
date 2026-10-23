<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_share_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerShareGetV30ApiService
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
     * 事件管理资产查看共享范围
     */
    public function get(): ApiOpenApiV30EventManagerShareGetGetRequest
    {
        return new ApiOpenApiV30EventManagerShareGetGetRequest($this);
    }
}
