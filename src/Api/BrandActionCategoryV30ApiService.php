<?php

/**
 * 本文件由 go2php 生成，源: api_brand_action_category_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandActionCategoryV30ApiService
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
     * AD品牌查询兴趣定向，创编时使用
     */
    public function get(): ApiOpenApiV30BrandActionCategoryGetRequest
    {
        return new ApiOpenApiV30BrandActionCategoryGetRequest($this);
    }
}
