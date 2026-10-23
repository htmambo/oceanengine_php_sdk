<?php

/**
 * 本文件由 go2php 生成，源: api_brand_tool_creative_preview_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandToolCreativePreviewV30ApiService
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

    public function get(): ApiOpenApiV30BrandToolCreativePreviewGetRequest
    {
        return new ApiOpenApiV30BrandToolCreativePreviewGetRequest($this);
    }
}
