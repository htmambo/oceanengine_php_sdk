<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_deep_bid_type_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerDeepBidTypeGetV30ApiService
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
     * 投放2.0获取可用深度优化方式
     */
    public function get(): ApiOpenApiV30EventManagerDeepBidTypeGetGetRequest
    {
        return new ApiOpenApiV30EventManagerDeepBidTypeGetGetRequest($this);
    }
}
