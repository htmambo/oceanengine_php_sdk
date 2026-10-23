<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_pkg_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserDeliveryPkgDeleteV30ApiService
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
     * 支持删除审核拒绝的投放资质（推广产品）
     */
    public function post(): ApiOpenApiV30AdvertiserDeliveryPkgDeletePostRequest
    {
        return new ApiOpenApiV30AdvertiserDeliveryPkgDeletePostRequest($this);
    }
}
