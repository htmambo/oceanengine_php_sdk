<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_qualification_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserDeliveryQualificationSubmitV30ApiService
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
     * 本接口用于广告主提交投放资质
     */
    public function post(): ApiOpenApiV30AdvertiserDeliveryQualificationSubmitPostRequest
    {
        return new ApiOpenApiV30AdvertiserDeliveryQualificationSubmitPostRequest($this);
    }
}
