<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_refresh_token.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class Oauth2RefreshTokenApiService
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
     * 当Access_Token超时后，可以使用refresh_token进行刷新，每次刷新都会产生新的access_token和Refresh_Token，同时重置二者的有效期。
     */
    public function post(): ApiOpenApiOauth2RefreshTokenPostRequest
    {
        return new ApiOpenApiOauth2RefreshTokenPostRequest($this);
    }
}
