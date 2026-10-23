<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_creative_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 白名单开放使用，查询2.0创意数据，2.0强切临时过渡使用
 */
class ApiOpenApiV30ReportCustomCreativeGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var string[] 维度列表 */
    private ?array $dimensions = null;
    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var string[] 指标列表 */
    private ?array $metrics = null;
    /** @var \Oceanengine\Models\ReportCustomCreativeGetV30FiltersInner[] 过滤条件 */
    private ?array $filters = null;
    /** @var string 开始时间。单位毫秒 */
    private ?string $startTime = null;
    /** @var string 结束时间。单位毫秒 */
    private ?string $endTime = null;
    /** @var \Oceanengine\Models\ReportCustomCreativeGetV30OrderByInner[] 排序 */
    private ?array $orderBy = null;
    /** @var int 页码。默认为1 */
    private ?int $page = null;
    /** @var int 页面大小。默认为10，最大100 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportCustomCreativeGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 维度列表
     */
    public function dimensions(array $dimensions): self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    /**
     * 广告主id
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 指标列表
     */
    public function metrics(array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filters(array $filters): self
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * 开始时间。单位毫秒
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 结束时间。单位毫秒
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 排序
     */
    public function orderBy(array $orderBy): self
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * 页码。默认为1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小。默认为10，最大100
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
     * 白名单开放使用，查询2.0创意数据，2.0强切临时过渡使用
     */
    public function execute(): \Oceanengine\Models\ReportCustomCreativeGetV30Response
    {
        if ($this->dimensions === null) {
            throw new \InvalidArgumentException('dimensions is required and must be specified');
        }
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->metrics === null) {
            throw new \InvalidArgumentException('metrics is required and must be specified');
        }
        if ($this->filters === null) {
            throw new \InvalidArgumentException('filters is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        if ($this->orderBy === null) {
            throw new \InvalidArgumentException('orderBy is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['dimensions'] = $this->dimensions;
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['metrics'] = $this->metrics;
        $__encoded0 = json_encode($this->filters);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filters');
            }
            $queryParams['filters'] = $__encoded0;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        $__encoded1 = json_encode($this->orderBy);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: orderBy');
            }
            $queryParams['order_by'] = $__encoded1;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/custom/creative/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportCustomCreativeGetV30Response::class);

        return $result['model'];
    }
}
