<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_fund_grant_transaction_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 根据广告账户id，时间，流水类型查询赠款流水
 */
class ApiOpenApi2AdvertiserFundGrantTransactionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    private ?string $page = null;
    private ?string $pageSize = null;
    private ?string $transactionType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserFundGrantTransactionGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function page(string $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(string $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function transactionType(string $transactionType): self
    {
        $this->transactionType = $transactionType;
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
     * 根据广告账户id，时间，流水类型查询赠款流水
     */
    public function execute(): \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        if ($this->transactionType !== null) {
            $queryParams['transaction_type'] = $this->transactionType;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/advertiser/fund/grant_transaction/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserFundGrantTransactionGetV2Response::class);

        return $result['model'];
    }
}
