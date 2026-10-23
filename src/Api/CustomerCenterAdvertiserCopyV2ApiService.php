<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_advertiser_copy_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CustomerCenterAdvertiserCopyV2ApiService
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
     * 复制广告主账号
     */
    public function post(): ApiOpenApi2CustomerCenterAdvertiserCopyPostRequest
    {
        return new ApiOpenApi2CustomerCenterAdvertiserCopyPostRequest($this);
    }
}
