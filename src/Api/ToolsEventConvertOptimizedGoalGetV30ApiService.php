<?php

/**
 * 本文件由 go2php 生成，源: api_tools_event_convert_optimized_goal_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEventConvertOptimizedGoalGetV30ApiService
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
     * 支持建站和小程序资产获取优化目标
     */
    public function get(): ApiOpenApiV30ToolsEventConvertOptimizedGoalGetGetRequest
    {
        return new ApiOpenApiV30ToolsEventConvertOptimizedGoalGetGetRequest($this);
    }
}
