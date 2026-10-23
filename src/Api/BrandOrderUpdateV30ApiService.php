<?php

/**
 * 本文件由 go2php 生成，源: api_brand_order_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandOrderUpdateV30ApiService
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
     * 编辑预定单
     */
    public function post(): ApiOpenApiV30BrandOrderUpdatePostRequest
    {
        return new ApiOpenApiV30BrandOrderUpdatePostRequest($this);
    }
}
