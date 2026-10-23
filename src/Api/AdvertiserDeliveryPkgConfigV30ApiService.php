<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_pkg_config_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserDeliveryPkgConfigV30ApiService
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
     * 根据商业化行业获取不同行业下对应的资质提交规则。
     * 需注意：每个行业下的资质提交规则可能会因平台及外部监管的要求而发生变化，当规则发生变更时，规则的版本号+1
     */
    public function get(): ApiOpenApiV30AdvertiserDeliveryPkgConfigGetRequest
    {
        return new ApiOpenApiV30AdvertiserDeliveryPkgConfigGetRequest($this);
    }
}
