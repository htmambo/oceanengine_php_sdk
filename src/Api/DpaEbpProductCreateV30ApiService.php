<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_product_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpProductCreateV30ApiService
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
     * EBP新建通用版商品
     */
    public function post(): ApiOpenApiV30DpaEbpProductCreatePostRequest
    {
        return new ApiOpenApiV30DpaEbpProductCreatePostRequest($this);
    }
}
