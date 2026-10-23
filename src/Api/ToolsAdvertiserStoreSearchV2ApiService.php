<?php

/**
 * 本文件由 go2php 生成，源: api_tools_advertiser_store_search_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAdvertiserStoreSearchV2ApiService
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
     * 搜索门店接口
     */
    public function get(): ApiOpenApi2ToolsAdvertiserStoreSearchGetRequest
    {
        return new ApiOpenApi2ToolsAdvertiserStoreSearchGetRequest($this);
    }
}
