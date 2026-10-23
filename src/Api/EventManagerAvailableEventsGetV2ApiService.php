<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_available_events_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerAvailableEventsGetV2ApiService
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
     * 此接口用于查询资产下支持创建的事件列表
     */
    public function get(): ApiOpenApi2EventManagerAvailableEventsGetGetRequest
    {
        return new ApiOpenApi2EventManagerAvailableEventsGetGetRequest($this);
    }
}
