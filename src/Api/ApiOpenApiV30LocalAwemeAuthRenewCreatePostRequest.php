<?php

/**
 * 本文件由 go2php 生成，源: api_local_aweme_auth_renew_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 续期抖音号授权
 */
class ApiOpenApiV30LocalAwemeAuthRenewCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\LocalAwemeAuthRenewCreateV30Request $localAwemeAuthRenewCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalAwemeAuthRenewCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAwemeAuthRenewCreateV30Request(\Oceanengine\Models\LocalAwemeAuthRenewCreateV30Request $localAwemeAuthRenewCreateV30Request): self
    {
        $this->localAwemeAuthRenewCreateV30Request = $localAwemeAuthRenewCreateV30Request;
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
     * 续期抖音号授权
     */
    public function execute(): \Oceanengine\Models\LocalAwemeAuthRenewCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->localAwemeAuthRenewCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/aweme_auth_renew/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalAwemeAuthRenewCreateV30Response::class);

        return $result['model'];
    }
}
