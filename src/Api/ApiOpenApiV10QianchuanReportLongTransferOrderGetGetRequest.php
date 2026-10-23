<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_long_transfer_order_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 长周期转化价值-订单明细
 */
class ApiOpenApiV10QianchuanReportLongTransferOrderGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 开始时间，格式 2021-04-05 */
    private ?string $startDate = null;
    /** @var string 结束时间，格式 2021-04-05，时间跨度不能超过90天 */
    private ?string $endDate = null;
    private ?\Oceanengine\Models\QianchuanReportLongTransferOrderGetV10OptimizationTimeScope $optimizationTimeScope = null;
    private ?\Oceanengine\Models\QianchuanReportLongTransferOrderGetV10Filtering $filtering = null;
    private ?string $marketingGoal = null;
    private ?string $orderType = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportLongTransferOrderGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

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
     * 结束时间，格式 2021-04-05，时间跨度不能超过90天
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function optimizationTimeScope(\Oceanengine\Models\QianchuanReportLongTransferOrderGetV10OptimizationTimeScope $optimizationTimeScope): self
    {
        $this->optimizationTimeScope = $optimizationTimeScope;
        return $this;
    }

    public function filtering(\Oceanengine\Models\QianchuanReportLongTransferOrderGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
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
     * 长周期转化价值-订单明细
     */
    public function execute(): \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10Response
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
        if ($this->optimizationTimeScope === null) {
            throw new \InvalidArgumentException('optimizationTimeScope is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $__encoded0 = json_encode($this->optimizationTimeScope);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: optimizationTimeScope');
            }
            $queryParams['optimization_time_scope'] = $__encoded0;
        $__encoded1 = json_encode($this->filtering);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded1;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/long_transfer/order/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportLongTransferOrderGetV10Response::class);

        return $result['model'];
    }
}
