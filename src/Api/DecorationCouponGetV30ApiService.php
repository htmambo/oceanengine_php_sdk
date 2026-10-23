<?php

/**
 * 本文件由 go2php 生成，源: api_decoration_coupon_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DecorationCouponGetV30ApiService
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
     * 线索通获取家装联盟卡券列表
     */
    public function get(): ApiOpenApiV30DecorationCouponGetGetRequest
    {
        return new ApiOpenApiV30DecorationCouponGetGetRequest($this);
    }
}
