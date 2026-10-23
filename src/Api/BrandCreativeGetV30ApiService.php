<?php

/**
 * 本文件由 go2php 生成，源: api_brand_creative_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandCreativeGetV30ApiService
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
     * 查询AD品牌广告创意详情
     */
    public function get(): ApiOpenApiV30BrandCreativeGetGetRequest
    {
        return new ApiOpenApiV30BrandCreativeGetGetRequest($this);
    }
}
