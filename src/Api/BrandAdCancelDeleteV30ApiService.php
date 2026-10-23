<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ad_cancel_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandAdCancelDeleteV30ApiService
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
     * AD品牌计划取消删除
     */
    public function post(): ApiOpenApiV30BrandAdCancelDeletePostRequest
    {
        return new ApiOpenApiV30BrandAdCancelDeletePostRequest($this);
    }
}
