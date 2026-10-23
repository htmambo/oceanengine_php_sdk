<?php

/**
 * 本文件由 go2php 生成，源: api_shop_bonus_success_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ShopBonusSuccessGetV30ApiService
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
     * 供阿里健康可查询优惠券配置内容
     */
    public function get(): ApiOpenApiV30ShopBonusSuccessGetGetRequest
    {
        return new ApiOpenApiV30ShopBonusSuccessGetGetRequest($this);
    }
}
