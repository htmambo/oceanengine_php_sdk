<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_disable_check_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserDisableCheckGetV2ApiService
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
     * 投放账户注销前置校验接口，判断账户是否满足注销条件
     */
    public function get(): ApiOpenApi2AdvertiserDisableCheckGetGetRequest
    {
        return new ApiOpenApi2AdvertiserDisableCheckGetGetRequest($this);
    }
}
