<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_delivery_qualification_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserDeliveryQualificationDeleteV30ApiService
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
     * 支持删除审核拒绝的投放资质（单资质）
     */
    public function post(): ApiOpenApiV30AdvertiserDeliveryQualificationDeletePostRequest
    {
        return new ApiOpenApiV30AdvertiserDeliveryQualificationDeletePostRequest($this);
    }
}
