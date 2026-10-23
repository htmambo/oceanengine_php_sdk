<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_assets_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerAssetsCreateV2ApiService
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
     * 此接口用于创建广告账户下资产
     */
    public function post(): ApiOpenApi2EventManagerAssetsCreatePostRequest
    {
        return new ApiOpenApi2EventManagerAssetsCreatePostRequest($this);
    }
}
