<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_renew_token.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class Oauth2RenewTokenApiService
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
     * 重置 token 有效期
     */
    public function post(): ApiOpenApiOauth2RenewTokenPostRequest
    {
        return new ApiOpenApiOauth2RenewTokenPostRequest($this);
    }
}
