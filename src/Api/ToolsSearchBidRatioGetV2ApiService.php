<?php

/**
 * 本文件由 go2php 生成，源: api_tools_search_bid_ratio_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSearchBidRatioGetV2ApiService
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
     * 获取快投推荐出价系数
     */
    public function get(): ApiOpenApi2ToolsSearchBidRatioGetGetRequest
    {
        return new ApiOpenApi2ToolsSearchBidRatioGetGetRequest($this);
    }
}
