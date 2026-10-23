<?php

/**
 * 本文件由 go2php 生成，源: api_tools_estimate_audience_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEstimateAudienceV2ApiService
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
     * 通过此接口你可以查询计划的受众条件，预估其在今日头条、抖音短视频、火山小视频和西瓜视频中的覆盖用户量，当受众预估的结果低于3万时，建议重新设置受众选项。
     */
    public function get(): ApiOpenApi2ToolsEstimateAudienceGetRequest
    {
        return new ApiOpenApi2ToolsEstimateAudienceGetRequest($this);
    }
}
