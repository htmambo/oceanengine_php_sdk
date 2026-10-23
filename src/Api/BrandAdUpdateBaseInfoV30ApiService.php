<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ad_update_base_info_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandAdUpdateBaseInfoV30ApiService
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
     * 编辑基础信息
     */
    public function post(): ApiOpenApiV30BrandAdUpdateBaseInfoPostRequest
    {
        return new ApiOpenApiV30BrandAdUpdateBaseInfoPostRequest($this);
    }
}
