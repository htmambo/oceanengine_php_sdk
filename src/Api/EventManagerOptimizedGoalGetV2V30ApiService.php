<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_optimized_goal_get_v2_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerOptimizedGoalGetV2V30ApiService
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
     * API Description
     */
    public function get(): ApiOpenApiV30EventManagerOptimizedGoalGetV2GetRequest
    {
        return new ApiOpenApiV30EventManagerOptimizedGoalGetV2GetRequest($this);
    }
}
