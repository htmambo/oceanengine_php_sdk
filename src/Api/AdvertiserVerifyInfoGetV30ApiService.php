<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_verify_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserVerifyInfoGetV30ApiService
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
     * 根据账户ID、平台，批量查询对公验证信息
     */
    public function get(): ApiOpenApiV30AdvertiserVerifyInfoGetGetRequest
    {
        return new ApiOpenApiV30AdvertiserVerifyInfoGetGetRequest($this);
    }
}
