<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_access_token.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class Oauth2AccessTokenApiService
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
     * Access-Token是调用授权关系接口的调用凭证，用于服务端对API请求鉴权。所有接口均通过请求参数中传递的 Access_Token来进行身份认证和鉴权。
     */
    public function post(): ApiOpenApiOauth2AccessTokenPostRequest
    {
        return new ApiOpenApiOauth2AccessTokenPostRequest($this);
    }
}
