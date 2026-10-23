<?php

/**
 * 本文件由 go2php 生成，源: api_account_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 修改账户信息
 */
class ApiOpenApiV30AccountUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AccountUpdateV30Request $accountUpdateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AccountUpdateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function accountUpdateV30Request(\Oceanengine\Models\AccountUpdateV30Request $accountUpdateV30Request): self
    {
        $this->accountUpdateV30Request = $accountUpdateV30Request;
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
     * 修改账户信息
     */
    public function execute(): \Oceanengine\Models\AccountUpdateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->accountUpdateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/account/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AccountUpdateV30Response::class);

        return $result['model'];
    }
}
