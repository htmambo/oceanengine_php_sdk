<?php

/**
 * 本文件由 go2php 生成，源: api_shop_bonus_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ShopBonusCreateV30ApiService
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
     * 阿里健康根据SPI消息获知哪些商品可配置券后，对巨量回传具体配置优惠券的相关信息
     */
    public function post(): ApiOpenApiV30ShopBonusCreatePostRequest
    {
        return new ApiOpenApiV30ShopBonusCreatePostRequest($this);
    }
}
