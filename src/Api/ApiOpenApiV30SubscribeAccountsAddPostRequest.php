<?php

/**
 * 本文件由 go2php 生成，源: api_subscribe_accounts_add_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 增加对 Adv 的订阅
 */
class ApiOpenApiV30SubscribeAccountsAddPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?string $aPPAccessToken = null;
    private ?\Oceanengine\Models\SubscribeAccountsAddV30Request $subscribeAccountsAddV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(SubscribeAccountsAddV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function aPPAccessToken(string $aPPAccessToken): self
    {
        $this->aPPAccessToken = $aPPAccessToken;
        return $this;
    }

    public function subscribeAccountsAddV30Request(\Oceanengine\Models\SubscribeAccountsAddV30Request $subscribeAccountsAddV30Request): self
    {
        $this->subscribeAccountsAddV30Request = $subscribeAccountsAddV30Request;
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
     * 增加对 Adv 的订阅
     */
    public function execute(): \Oceanengine\Models\SubscribeAccountsAddV30Response
    {
        if ($this->aPPAccessToken === null) {
            throw new \InvalidArgumentException('aPPAccessToken is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['APP-Access-Token'] = $this->aPPAccessToken;
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->subscribeAccountsAddV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/subscribe/accounts/add/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\SubscribeAccountsAddV30Response::class);

        return $result['model'];
    }
}
