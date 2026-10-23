<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_product_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpProductUpdateV30ApiService
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
     * EBP编辑通用版商品库商品
     */
    public function post(): ApiOpenApiV30DpaEbpProductUpdatePostRequest
    {
        return new ApiOpenApiV30DpaEbpProductUpdatePostRequest($this);
    }
}
