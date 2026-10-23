<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_qualification_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserDeliveryQualificationListV30ApiService
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
     * 用于查询账户投放资质
     */
    public function get(): ApiOpenApiV30AdvertiserDeliveryQualificationListGetRequest
    {
        return new ApiOpenApiV30AdvertiserDeliveryQualificationListGetRequest($this);
    }
}
