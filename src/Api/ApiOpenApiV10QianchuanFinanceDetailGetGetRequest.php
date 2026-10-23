<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_finance_detail_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * API Description2
 */
class ApiOpenApiV10QianchuanFinanceDetailGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主ID */
    private ?int $advertiserId = null;
    /** @var string 开始时间，格式 2021-04-05 */
    private ?string $startDate = null;
    /** @var string 结束时间，格式 2021-04-05，时间跨度不能超过1年 */
    private ?string $endDate = null;
    /** @var int 页码. 默认值: 1 */
    private ?int $page = null;
    /** @var int 页面数据量. 默认值: 10 上限：200 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanFinanceDetailGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 广告主ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 开始时间，格式 2021-04-05
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 结束时间，格式 2021-04-05，时间跨度不能超过1年
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 页码. 默认值: 1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面数据量. 默认值: 10 上限：200
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
     * API Description2
     */
    public function execute(): \Oceanengine\Models\QianchuanFinanceDetailGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        if ($this->startDate !== null) {
            $queryParams['start_date'] = $this->startDate;
        }
        if ($this->endDate !== null) {
            $queryParams['end_date'] = $this->endDate;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/finance/detail/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanFinanceDetailGetV10Response::class);

        return $result['model'];
    }
}
