<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_budget_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 此接口可以更新广告主账号设置的预算类型与预算
 */
class ApiOpenApi2AdvertiserBudgetGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?array $advertiserIds = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserBudgetGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserIds(array $advertiserIds): self
    {
        $this->advertiserIds = $advertiserIds;
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
     * 此接口可以更新广告主账号设置的预算类型与预算
     */
    public function execute(): \Oceanengine\Models\AdvertiserBudgetGetV2Response
    {
        if ($this->advertiserIds === null) {
            throw new \InvalidArgumentException('advertiserIds is required and must be specified');
        }
        if (count($this->advertiserIds) < 1) {
            throw new \InvalidArgumentException('advertiserIds must have at least 1 elements');
        }
        if (count($this->advertiserIds) > 100) {
            throw new \InvalidArgumentException('advertiserIds must have less than 100 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_ids'] = $this->advertiserIds;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/advertiser/budget/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserBudgetGetV2Response::class);

        return $result['model'];
    }
}
