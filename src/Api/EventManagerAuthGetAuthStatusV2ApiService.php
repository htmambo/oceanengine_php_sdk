<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_auth_get_auth_status_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerAuthGetAuthStatusV2ApiService
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

    public function get(): ApiOpenApi2EventManagerAuthGetAuthStatusGetRequest
    {
        return new ApiOpenApi2EventManagerAuthGetAuthStatusGetRequest($this);
    }
}
