<?php

/**
 * 本文件由 go2php 生成，源: api_oauth2_renew_token.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 重置 token 有效期
 */
class ApiOpenApiOauth2RenewTokenPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\Oauth2RenewTokenRequest $oauth2RenewTokenRequest = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(Oauth2RenewTokenApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function oauth2RenewTokenRequest(\Oceanengine\Models\Oauth2RenewTokenRequest $oauth2RenewTokenRequest): self
    {
        $this->oauth2RenewTokenRequest = $oauth2RenewTokenRequest;
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
     * 重置 token 有效期
     */
    public function execute(): \Oceanengine\Models\Oauth2RenewTokenResponse
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->oauth2RenewTokenRequest);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/oauth2/renew_token/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\Oauth2RenewTokenResponse::class);

        return $result['model'];
    }
}
