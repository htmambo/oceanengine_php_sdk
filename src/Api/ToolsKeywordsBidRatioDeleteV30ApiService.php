<?php

/**
 * 本文件由 go2php 生成，源: api_tools_keywords_bid_ratio_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsKeywordsBidRatioDeleteV30ApiService
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
     * 账户优词工具-删除优词
     */
    public function post(): ApiOpenApiV30ToolsKeywordsBidRatioDeletePostRequest
    {
        return new ApiOpenApiV30ToolsKeywordsBidRatioDeletePostRequest($this);
    }
}
