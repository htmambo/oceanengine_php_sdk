<?php

/**
 * 本文件由 go2php 生成，源: api_star_brand_category_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarBrandCategoryListV2ApiService
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
     * 获取星图品牌云图类目列表
     */
    public function get(): ApiOpenApi2StarBrandCategoryListGetRequest
    {
        return new ApiOpenApi2StarBrandCategoryListGetRequest($this);
    }
}
