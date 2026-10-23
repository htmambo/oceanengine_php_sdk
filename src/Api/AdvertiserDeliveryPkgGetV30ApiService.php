<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_pkg_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserDeliveryPkgGetV30ApiService
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
     * 用于查询广告主以推广产品形式提交的投放资质，可以获取到资质审核状态等信息
     */
    public function get(): ApiOpenApiV30AdvertiserDeliveryPkgGetGetRequest
    {
        return new ApiOpenApiV30AdvertiserDeliveryPkgGetGetRequest($this);
    }
}
