<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_refresh_token.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 当Access_Token超时后，可以使用refresh_token进行刷新，每次刷新都会产生新的access_token和Refresh_Token，同时重置二者的有效期。
 */
class ApiOpenApiOauth2RefreshTokenPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\Oauth2RefreshTokenRequest $oauth2RefreshTokenRequest = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(Oauth2RefreshTokenApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function oauth2RefreshTokenRequest(\Oceanengine\Models\Oauth2RefreshTokenRequest $oauth2RefreshTokenRequest): self
    {
        $this->oauth2RefreshTokenRequest = $oauth2RefreshTokenRequest;
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
     * 当Access_Token超时后，可以使用refresh_token进行刷新，每次刷新都会产生新的access_token和Refresh_Token，同时重置二者的有效期。
     */
    public function execute(): \Oceanengine\Models\Oauth2RefreshTokenResponse
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->oauth2RefreshTokenRequest);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/oauth2/refresh_token/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\Oauth2RefreshTokenResponse::class);

        return $result['model'];
    }
}
