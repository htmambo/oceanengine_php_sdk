<?php

/**
 * 本文件由 go2php 生成，源: api_tools_keywords_bid_ratio_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsKeywordsBidRatioCreateV30ApiService
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
     * 创建优词
     */
    public function post(): ApiOpenApiV30ToolsKeywordsBidRatioCreatePostRequest
    {
        return new ApiOpenApiV30ToolsKeywordsBidRatioCreatePostRequest($this);
    }
}
