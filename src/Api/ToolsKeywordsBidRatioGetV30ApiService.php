<?php

/**
 * 本文件由 go2php 生成，源: api_tools_keywords_bid_ratio_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsKeywordsBidRatioGetV30ApiService
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
     * 账户优词工具-查询优词
     */
    public function get(): ApiOpenApiV30ToolsKeywordsBidRatioGetGetRequest
    {
        return new ApiOpenApiV30ToolsKeywordsBidRatioGetGetRequest($this);
    }
}
