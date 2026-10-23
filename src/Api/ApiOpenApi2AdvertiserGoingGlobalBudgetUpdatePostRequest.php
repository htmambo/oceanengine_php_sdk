<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_going_global_budget_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 更新账户出海日预算
 */
class ApiOpenApi2AdvertiserGoingGlobalBudgetUpdatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\AdvertiserGoingGlobalBudgetUpdateV2Request $advertiserGoingGlobalBudgetUpdateV2Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserGoingGlobalBudgetUpdateV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserGoingGlobalBudgetUpdateV2Request(\Oceanengine\Models\AdvertiserGoingGlobalBudgetUpdateV2Request $advertiserGoingGlobalBudgetUpdateV2Request): self
    {
        $this->advertiserGoingGlobalBudgetUpdateV2Request = $advertiserGoingGlobalBudgetUpdateV2Request;
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
     * 更新账户出海日预算
     */
    public function execute(): \Oceanengine\Models\AdvertiserGoingGlobalBudgetUpdateV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->advertiserGoingGlobalBudgetUpdateV2Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/advertiser/going_global_budget/update/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserGoingGlobalBudgetUpdateV2Response::class);

        return $result['model'];
    }
}
