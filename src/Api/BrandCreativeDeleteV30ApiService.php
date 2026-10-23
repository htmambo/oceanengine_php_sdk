<?php

/**
 * 本文件由 go2php 生成，源: api_brand_creative_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCreativeDeleteV30ApiService
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
     * 品牌创意删除
     */
    public function post(): ApiOpenApiV30BrandCreativeDeletePostRequest
    {
        return new ApiOpenApiV30BrandCreativeDeletePostRequest($this);
    }
}
