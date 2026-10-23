<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_long_transfer_order_data_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取长周期订单
 */
class ApiOpenApiV10QianchuanReportLongTransferOrderDataGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $dataTopic = null;
    private ?array $dimensions = null;
    private ?array $metrics = null;
    private ?array $filters = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    private ?array $orderBy = null;
    /** @var int 第几页 */
    private ?int $page = null;
    /** @var int 页大小 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportLongTransferOrderDataGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function dataTopic(string $dataTopic): self
    {
        $this->dataTopic = $dataTopic;
        return $this;
    }

    public function dimensions(array $dimensions): self
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    public function metrics(array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    public function filters(array $filters): self
    {
        $this->filters = $filters;
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

    public function orderBy(array $orderBy): self
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     * 第几页
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页大小
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
     * 获取长周期订单
     */
    public function execute(): \Oceanengine\Models\QianchuanReportLongTransferOrderDataGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->dataTopic === null) {
            throw new \InvalidArgumentException('dataTopic is required and must be specified');
        }
        if ($this->dimensions === null) {
            throw new \InvalidArgumentException('dimensions is required and must be specified');
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
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['data_topic'] = $this->dataTopic;
        $queryParams['dimensions'] = $this->dimensions;
        $queryParams['metrics'] = $this->metrics;
        $__encoded0 = json_encode($this->filters);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filters');
            }
            $queryParams['filters'] = $__encoded0;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        if ($this->orderBy !== null) {
            $__encoded1 = json_encode($this->orderBy);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: orderBy');
            }
            $queryParams['order_by'] = $__encoded1;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/long_transfer/order/data/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportLongTransferOrderDataGetV10Response::class);

        return $result['model'];
    }
}
