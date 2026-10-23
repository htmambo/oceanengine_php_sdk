<?php

/**
 * 本文件由 go2php 生成，源: api_local_life_advertiser_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalLifeAdvertiserCreateV30ApiService
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
     * 本地开户接口
     */
    public function post(): ApiOpenApiV30LocalLifeAdvertiserCreatePostRequest
    {
        return new ApiOpenApiV30LocalLifeAdvertiserCreatePostRequest($this);
    }
}
