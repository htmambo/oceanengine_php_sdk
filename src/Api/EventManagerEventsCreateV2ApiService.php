<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_events_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerEventsCreateV2ApiService
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
     * > 此接口用于在资产下创建单个事件
     * 需要线通过【获取推广内容】接口获取要创建的资产ID（asset_id）
     * 需要先通过【获取可创建事件】接口获取到某资产下支持创建的事件ID（event_id）
     * 当资产类型是三方落地页时，同资产同事件支持多种回传方式，但XPATH不能与JSSDK和EXTERNAL_API同时存在
     */
    public function post(): ApiOpenApi2EventManagerEventsCreatePostRequest
    {
        return new ApiOpenApi2EventManagerEventsCreatePostRequest($this);
    }
}
