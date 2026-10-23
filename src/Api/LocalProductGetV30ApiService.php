<?php

/**
 * 本文件由 go2php 生成，源: api_local_product_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalProductGetV30ApiService
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
     * 获取商品列表
     */
    public function get(): ApiOpenApiV30LocalProductGetGetRequest
    {
        return new ApiOpenApiV30LocalProductGetGetRequest($this);
    }
}
