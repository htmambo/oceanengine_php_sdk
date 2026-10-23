<?php

/**
 * 本文件由 go2php 生成，源: api_brand_tool_query_stock_balance_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandToolQueryStockBalanceV30ApiService
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
     * 询量接口
     */
    public function get(): ApiOpenApiV30BrandToolQueryStockBalanceGetRequest
    {
        return new ApiOpenApiV30BrandToolQueryStockBalanceGetRequest($this);
    }
}
