<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_product_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpProductDeleteV30ApiService
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
     * EBP删除通用版商品
     */
    public function post(): ApiOpenApiV30DpaEbpProductDeletePostRequest
    {
        return new ApiOpenApiV30DpaEbpProductDeletePostRequest($this);
    }
}
