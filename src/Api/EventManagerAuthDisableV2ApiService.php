<?php

/**
 * 本文件由 go2php 生成，源: api_event_manager_auth_disable_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EventManagerAuthDisableV2ApiService
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
    public function post(): ApiOpenApi2EventManagerAuthDisablePostRequest
    {
        return new ApiOpenApi2EventManagerAuthDisablePostRequest($this);
    }
}
