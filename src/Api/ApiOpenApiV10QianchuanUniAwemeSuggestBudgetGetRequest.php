<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_aweme_suggest_budget_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取全域建议预算
 */
class ApiOpenApiV10QianchuanUniAwemeSuggestBudgetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $awemeId = null;
    private ?string $marketingGoal = null;
    private ?array $productIds = null;
    private ?int $adId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniAwemeSuggestBudgetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function awemeId(int $awemeId): self
    {
        $this->awemeId = $awemeId;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function productIds(array $productIds): self
    {
        $this->productIds = $productIds;
        return $this;
    }

    public function adId(int $adId): self
    {
        $this->adId = $adId;
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
     * 获取全域建议预算
     */
    public function execute(): \Oceanengine\Models\QianchuanUniAwemeSuggestBudgetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->awemeId === null) {
            throw new \InvalidArgumentException('awemeId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['aweme_id'] = $this->awemeId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        if ($this->productIds !== null) {
            $queryParams['product_ids'] = $this->productIds;
        }
        if ($this->adId !== null) {
            $queryParams['ad_id'] = $this->adId;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_aweme/suggest/budget/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniAwemeSuggestBudgetV10Response::class);

        return $result['model'];
    }
}
