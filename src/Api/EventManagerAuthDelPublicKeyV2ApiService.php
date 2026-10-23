<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_auth_del_public_key_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerAuthDelPublicKeyV2ApiService
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
     * 删除公钥
     */
    public function post(): ApiOpenApi2EventManagerAuthDelPublicKeyPostRequest
    {
        return new ApiOpenApi2EventManagerAuthDelPublicKeyPostRequest($this);
    }
}
