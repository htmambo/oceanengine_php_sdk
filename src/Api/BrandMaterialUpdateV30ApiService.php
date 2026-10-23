<?php

/**
 * 本文件由 go2php 生成，源: api_brand_material_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandMaterialUpdateV30ApiService
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
     * 编辑创意，全量更新接口
     */
    public function post(): ApiOpenApiV30BrandMaterialUpdatePostRequest
    {
        return new ApiOpenApiV30BrandMaterialUpdatePostRequest($this);
    }
}
