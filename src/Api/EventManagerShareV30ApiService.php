<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_share_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerShareV30ApiService
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
     * 事件管理资产共享
     */
    public function post(): ApiOpenApiV30EventManagerSharePostRequest
    {
        return new ApiOpenApiV30EventManagerSharePostRequest($this);
    }
}
