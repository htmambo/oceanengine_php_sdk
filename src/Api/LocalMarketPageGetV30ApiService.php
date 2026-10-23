<?php

/**
 * 本文件由 go2php 生成，源: api_local_market_page_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalMarketPageGetV30ApiService
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
     * 查询营销页详情
     */
    public function get(): ApiOpenApiV30LocalMarketPageGetGetRequest
    {
        return new ApiOpenApiV30LocalMarketPageGetGetRequest($this);
    }
}
