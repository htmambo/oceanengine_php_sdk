<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_account_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandMaAccountListV30ApiService
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
     * 批量获取广告主信息
     */
    public function get(): ApiOpenApiV30BrandMaAccountListGetRequest
    {
        return new ApiOpenApiV30BrandMaAccountListGetRequest($this);
    }
}
