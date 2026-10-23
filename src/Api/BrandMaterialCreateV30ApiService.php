<?php

/**
 * 本文件由 go2php 生成，源: api_brand_material_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandMaterialCreateV30ApiService
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
     * 品牌预定单创建创意
     */
    public function post(): ApiOpenApiV30BrandMaterialCreatePostRequest
    {
        return new ApiOpenApiV30BrandMaterialCreatePostRequest($this);
    }
}
