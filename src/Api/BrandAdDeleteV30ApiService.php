<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ad_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandAdDeleteV30ApiService
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
     * AD品牌计划删除
     */
    public function post(): ApiOpenApiV30BrandAdDeletePostRequest
    {
        return new ApiOpenApiV30BrandAdDeletePostRequest($this);
    }
}
