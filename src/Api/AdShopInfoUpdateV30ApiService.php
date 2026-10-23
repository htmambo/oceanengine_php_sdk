<?php

/**
 * 本文件由 go2php 生成，源: api_ad_shop_info_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdShopInfoUpdateV30ApiService
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
     * 店铺信息更新
     */
    public function post(): ApiOpenApiV30AdShopInfoUpdatePostRequest
    {
        return new ApiOpenApiV30AdShopInfoUpdatePostRequest($this);
    }
}
