<?php

/**
 * 本文件由 go2php 生成，源: api_local_report_promotion_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取广告数据
 */
class ApiOpenApiV30LocalReportPromotionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $localAccountId = null;
    /** @var string 查询起始日期，格式：2021-04-05 */
    private ?string $startDate = null;
    /** @var string 查询结束日期，格式 2021-04-05。 若不传time_granularity，则时间跨度不能超过365天； 若传time_granularity为TIME_GRANULARITY_DAILY时，则时间跨度不能超过365天； 若传time_granularity为TIME_GRANULARITY_TOTAL时，则时间跨度不能超过365天； 若传time_granularity为TIME_GRANULARITY_HOURLY时，则时间跨度不能超过7天 */
    private ?string $endDate = null;
    /** @var string[] 指标集 */
    private ?array $metrics = null;
    /** @var string 时间粒度 */
    private ?string $timeGranularity = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;
    /** @var string 排序字段，允许值参考数据指标 */
    private ?string $orderField = null;
    /** @var \Oceanengine\Models\LocalReportPromotionGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\LocalReportPromotionGetV30Filtering $filtering = null;
    /** @var int 页码，默认值：1 */
    private ?int $page = null;
    /** @var int 页面大小，允许值：10, 20, 50, 100，默认值：10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(LocalReportPromotionGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function localAccountId(int $localAccountId): self
    {
        $this->localAccountId = $localAccountId;
        return $this;
    }

    /**
     * 查询起始日期，格式：2021-04-05
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 查询结束日期，格式 2021-04-05。 若不传time_granularity，则时间跨度不能超过365天； 若传time_granularity为TIME_GRANULARITY_DAILY时，则时间跨度不能超过365天； 若传time_granularity为TIME_GRANULARITY_TOTAL时，则时间跨度不能超过365天； 若传time_granularity为TIME_GRANULARITY_HOURLY时，则时间跨度不能超过7天
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 指标集
     */
    public function metrics(array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * 时间粒度
     */
    public function timeGranularity(string $timeGranularity): self
    {
        $this->timeGranularity = $timeGranularity;
        return $this;
    }

    /**
     * 排序方式
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 排序字段，允许值参考数据指标
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\LocalReportPromotionGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 页码，默认值：1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，允许值：10, 20, 50, 100，默认值：10
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
     * 获取广告数据
     */
    public function execute(): \Oceanengine\Models\LocalReportPromotionGetV30Response
    {
        if ($this->localAccountId === null) {
            throw new \InvalidArgumentException('localAccountId is required and must be specified');
        }
        if ($this->startDate === null) {
            throw new \InvalidArgumentException('startDate is required and must be specified');
        }
        if ($this->endDate === null) {
            throw new \InvalidArgumentException('endDate is required and must be specified');
        }
        if ($this->metrics === null) {
            throw new \InvalidArgumentException('metrics is required and must be specified');
        }
        if (count($this->metrics) < 1) {
            throw new \InvalidArgumentException('metrics must have at least 1 elements');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['local_account_id'] = $this->localAccountId;
        if ($this->timeGranularity !== null) {
            $queryParams['time_granularity'] = $this->timeGranularity;
        }
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        $queryParams['metrics'] = $this->metrics;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/local/report/promotion/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\LocalReportPromotionGetV30Response::class);

        return $result['model'];
    }
}
