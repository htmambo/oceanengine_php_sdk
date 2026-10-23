<?php

/**
 * 本文件由 go2php 生成，源: api_near_realtime_cost_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询账户区分资金来源的准实时消耗，在投放期内的预估花费金额。当天数据可能会有波动，次日9点后稳定
 */
class ApiOpenApiV30NearRealtimeCostGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int[] 广告主id列表，最多支持传100个 */
    private ?array $accountIds = null;
    /** @var string 查询起始日期，格式为yyyy-MM-dd */
    private ?string $startDate = null;
    /** @var string 查询结束日期，格式为yyyy-MM-dd */
    private ?string $endDate = null;
    /** @var int 页码，默认为1 */
    private ?int $page = null;
    /** @var int 页面大小，默认为10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(NearRealtimeCostGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主id列表，最多支持传100个
     */
    public function accountIds(array $accountIds): self
    {
        $this->accountIds = $accountIds;
        return $this;
    }

    /**
     * 查询起始日期，格式为yyyy-MM-dd
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 查询结束日期，格式为yyyy-MM-dd
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 页码，默认为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认为10
     */
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
     * 查询账户区分资金来源的准实时消耗，在投放期内的预估花费金额。当天数据可能会有波动，次日9点后稳定
     */
    public function execute(): \Oceanengine\Models\NearRealtimeCostGetV30Response
    {
        if ($this->accountIds === null) {
            throw new \InvalidArgumentException('accountIds is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['account_ids'] = $this->accountIds;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/near_realtime_cost/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\NearRealtimeCostGetV30Response::class);

        return $result['model'];
    }
}
