<?php

/**
 * 本文件由 go2php 生成，源: api_local_advertiser_budget_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取账户日预算
 */
class ApiOpenApiV30LocalAdvertiserBudgetGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 广告主id */
    private ?array $localAccountId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalAdvertiserBudgetGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id
     */
    public function localAccountId(array $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
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
     * 获取账户日预算
     */
    public function execute(): \Oceanengine\Models\LocalAdvertiserBudgetGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/advertiser/budget/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalAdvertiserBudgetGetV30Response::class);

        return $result['model'];
    }
}
