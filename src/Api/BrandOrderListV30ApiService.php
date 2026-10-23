<?php

/**
 * 本文件由 go2php 生成，源: api_brand_order_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandOrderListV30ApiService
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
     * 查询品牌2.0预订单信息
     */
    public function get(): ApiOpenApiV30BrandOrderListGetRequest
    {
        return new ApiOpenApiV30BrandOrderListGetRequest($this);
    }
}
