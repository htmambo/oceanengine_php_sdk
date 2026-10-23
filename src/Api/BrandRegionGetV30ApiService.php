<?php

/**
 * 本文件由 go2php 生成，源: api_brand_region_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandRegionGetV30ApiService
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
     * 获取地域信息列表
     */
    public function get(): ApiOpenApiV30BrandRegionGetGetRequest
    {
        return new ApiOpenApiV30BrandRegionGetGetRequest($this);
    }
}
