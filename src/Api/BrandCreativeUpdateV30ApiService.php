<?php

/**
 * 本文件由 go2php 生成，源: api_brand_creative_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCreativeUpdateV30ApiService
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
     * 创意编辑
     */
    public function post(): ApiOpenApiV30BrandCreativeUpdatePostRequest
    {
        return new ApiOpenApiV30BrandCreativeUpdatePostRequest($this);
    }
}
