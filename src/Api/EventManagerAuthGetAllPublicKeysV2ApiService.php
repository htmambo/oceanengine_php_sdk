<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_auth_get_all_public_keys_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerAuthGetAllPublicKeysV2ApiService
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
     * # API Description
     */
    public function get(): ApiOpenApi2EventManagerAuthGetAllPublicKeysGetRequest
    {
        return new ApiOpenApi2EventManagerAuthGetAllPublicKeysGetRequest($this);
    }
}
