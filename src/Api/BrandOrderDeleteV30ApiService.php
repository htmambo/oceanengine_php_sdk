<?php

/**
 * 本文件由 go2php 生成，源: api_brand_order_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandOrderDeleteV30ApiService
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
     * AD品牌2.0删除预订单
     */
    public function post(): ApiOpenApiV30BrandOrderDeletePostRequest
    {
        return new ApiOpenApiV30BrandOrderDeletePostRequest($this);
    }
}
