<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ad_update_delivery_info_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandAdUpdateDeliveryInfoV30ApiService
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
     * 编辑投放信息
     */
    public function post(): ApiOpenApiV30BrandAdUpdateDeliveryInfoPostRequest
    {
        return new ApiOpenApiV30BrandAdUpdateDeliveryInfoPostRequest($this);
    }
}
