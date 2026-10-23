<?php

/**
 * 本文件由 go2php 生成，源: api_tools_promotion_raise_stop_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsPromotionRaiseStopV30ApiService
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
     * 关停正在起量的方案
     */
    public function post(): ApiOpenApiV30ToolsPromotionRaiseStopPostRequest
    {
        return new ApiOpenApiV30ToolsPromotionRaiseStopPostRequest($this);
    }
}
