<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_order_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandMaOrderListV30ApiService
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
     * 查询账户下的预定单
     */
    public function get(): ApiOpenApiV30BrandMaOrderListGetRequest
    {
        return new ApiOpenApiV30BrandMaOrderListGetRequest($this);
    }
}
