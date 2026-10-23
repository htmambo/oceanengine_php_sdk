<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_shop_info_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionShopInfoUpdateV30ApiService
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
     * 电商店铺信息回传
     */
    public function post(): ApiOpenApiV30PromotionShopInfoUpdatePostRequest
    {
        return new ApiOpenApiV30PromotionShopInfoUpdatePostRequest($this);
    }
}
