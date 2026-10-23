<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_app_access_token.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class Oauth2AppAccessTokenApiService
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
     * API Description
     */
    public function post(): ApiOpenApiOauth2AppAccessTokenPostRequest
    {
        return new ApiOpenApiOauth2AppAccessTokenPostRequest($this);
    }
}
