<?php

/**
 * 本文件由 go2php 生成，源: api_brand_query_yuntu5a_brand_category_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandQueryYuntu5aBrandCategoryV30ApiService
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
     * AD品牌查询种草品牌
     */
    public function get(): ApiOpenApiV30BrandQueryYuntu5aBrandCategoryGetRequest
    {
        return new ApiOpenApiV30BrandQueryYuntu5aBrandCategoryGetRequest($this);
    }
}
