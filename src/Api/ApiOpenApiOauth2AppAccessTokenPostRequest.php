<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_app_access_token.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description
 */
class ApiOpenApiOauth2AppAccessTokenPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\Oauth2AppAccessTokenRequest $oauth2AppAccessTokenRequest = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(Oauth2AppAccessTokenApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function oauth2AppAccessTokenRequest(\Oceanengine\Models\Oauth2AppAccessTokenRequest $oauth2AppAccessTokenRequest): self
    {
        $this->oauth2AppAccessTokenRequest = $oauth2AppAccessTokenRequest;
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
     * API Description
     */
    public function execute(): \Oceanengine\Models\Oauth2AppAccessTokenResponse
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->oauth2AppAccessTokenRequest);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/oauth2/app_access_token/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\Oauth2AppAccessTokenResponse::class);

        return $result['model'];
    }
}
