<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_access_token.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * Access-Token是调用授权关系接口的调用凭证，用于服务端对API请求鉴权。所有接口均通过请求参数中传递的 Access_Token来进行身份认证和鉴权。
 */
class ApiOpenApiOauth2AccessTokenPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\Oauth2AccessTokenRequest $oauth2AccessTokenRequest = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(Oauth2AccessTokenApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function oauth2AccessTokenRequest(\Oceanengine\Models\Oauth2AccessTokenRequest $oauth2AccessTokenRequest): self
    {
        $this->oauth2AccessTokenRequest = $oauth2AccessTokenRequest;
        return $this;
    }

    public function accessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function withLog(bool $enable): self
    {
        $this->logEnabled = $enable;
        return $this;
    }

    /**
     * @throws \InvalidArgumentException
     * Access-Token是调用授权关系接口的调用凭证，用于服务端对API请求鉴权。所有接口均通过请求参数中传递的 Access_Token来进行身份认证和鉴权。
     */
    public function execute(): \Oceanengine\Models\Oauth2AccessTokenResponse
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->oauth2AccessTokenRequest);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/oauth2/access_token/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\Oauth2AccessTokenResponse::class);

        return $result['model'];
    }
}
