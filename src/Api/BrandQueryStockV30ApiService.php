<?php

/**
 * 本文件由 go2php 生成，源: api_brand_query_stock_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandQueryStockV30ApiService
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
     * AD品牌查询库存余量
     */
    public function get(): ApiOpenApiV30BrandQueryStockGetRequest
    {
        return new ApiOpenApiV30BrandQueryStockGetRequest($this);
    }
}
