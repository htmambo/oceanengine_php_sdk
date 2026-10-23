<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_optimized_goal_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerOptimizedGoalGetV30ApiService
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
     * OC_获取可用优化目标
     */
    public function get(): ApiOpenApiV30EventManagerOptimizedGoalGetGetRequest
    {
        return new ApiOpenApiV30EventManagerOptimizedGoalGetGetRequest($this);
    }
}
