<?php

/**
 * 本文件由 go2php 生成，源: api_local_aweme_auth_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 发起抖音号授权
 */
class ApiOpenApiV30LocalAwemeAuthCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalAwemeAuthCreateV30Request $localAwemeAuthCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalAwemeAuthCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAwemeAuthCreateV30Request(\Oceanengine\Models\LocalAwemeAuthCreateV30Request $localAwemeAuthCreateV30Request): self
    {
        $this->localAwemeAuthCreateV30Request = $localAwemeAuthCreateV30Request;
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
     * 发起抖音号授权
     */
    public function execute(): \Oceanengine\Models\LocalAwemeAuthCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localAwemeAuthCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/aweme_auth/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalAwemeAuthCreateV30Response::class);

        return $result['model'];
    }
}
