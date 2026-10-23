<?php

/**
 * 本文件由 go2php 生成，源: api_ad_billing_unique_id_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdBillingUniqueIdGetV30ApiService
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
     * 获取指定数量的全局唯一id
     */
    public function get(): ApiOpenApiV30AdBillingUniqueIdGetGetRequest
    {
        return new ApiOpenApiV30AdBillingUniqueIdGetGetRequest($this);
    }
}
