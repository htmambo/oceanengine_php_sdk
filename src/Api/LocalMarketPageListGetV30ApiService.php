<?php

/**
 * 本文件由 go2php 生成，源: api_local_market_page_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalMarketPageListGetV30ApiService
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
     * 获取可用营销页列表
     */
    public function get(): ApiOpenApiV30LocalMarketPageListGetGetRequest
    {
        return new ApiOpenApiV30LocalMarketPageListGetGetRequest($this);
    }
}
