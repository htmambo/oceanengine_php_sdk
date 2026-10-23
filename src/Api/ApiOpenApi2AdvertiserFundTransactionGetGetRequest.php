<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_fund_transaction_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询账号流水明细
 */
class ApiOpenApi2AdvertiserFundTransactionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $startDate = null;
    private ?string $endDate = null;
    private ?string $transactionType = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(AdvertiserFundTransactionGetV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function transactionType(string $transactionType): self
    {
        $this->transactionType = $transactionType;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
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
     * 查询账号流水明细
     */
    public function execute(): \Oceanengine\Models\AdvertiserFundTransactionGetV2Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        if ($this->transactionType === null) {
            throw new \InvalidArgumentException('transactionType is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $queryParams['transaction_type'] = $this->transactionType;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/advertiser/fund/transaction/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\AdvertiserFundTransactionGetV2Response::class);

        return $result['model'];
    }
}
