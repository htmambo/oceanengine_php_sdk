<?php

/**
 * 本文件由 go2php 生成，源: api_brand_tool_material_preview_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandToolMaterialPreviewV30ApiService
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
     * 获取预览二维码
     */
    public function get(): ApiOpenApiV30BrandToolMaterialPreviewGetRequest
    {
        return new ApiOpenApiV30BrandToolMaterialPreviewGetRequest($this);
    }
}
