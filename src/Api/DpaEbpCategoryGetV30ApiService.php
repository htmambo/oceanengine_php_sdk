<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_category_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpCategoryGetV30ApiService
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
     * EBP获取商品库DPA分类
     */
    public function get(): ApiOpenApiV30DpaEbpCategoryGetGetRequest
    {
        return new ApiOpenApiV30DpaEbpCategoryGetGetRequest($this);
    }
}
