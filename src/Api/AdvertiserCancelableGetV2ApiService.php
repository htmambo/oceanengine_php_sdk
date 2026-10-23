<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_cancelable_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserCancelableGetV2ApiService
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
     * 账户注销校验，判断账户因为哪些条件不能注销
     */
    public function get(): ApiOpenApi2AdvertiserCancelableGetGetRequest
    {
        return new ApiOpenApi2AdvertiserCancelableGetGetRequest($this);
    }
}
