<?php

/**
 * 本文件由 go2php 生成，源: api_report_brand_data_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询品牌自助2.0数据报表
 */
class ApiOpenApiV30ReportBrandDataGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $dataReportType = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    /** @var string 按时间维度拆分 */
    private ?string $timeDimension = null;
    private ?string $pageType = null;
    private ?\Oceanengine\Models\ReportBrandDataV30Filter $filter = null;
    private ?array $metrics = null;
    private ?\Oceanengine\Models\ReportBrandDataV30Page $page = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportBrandDataV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function dataReportType(string $dataReportType): self
    {
        $this->dataReportType = $dataReportType;
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

    /**
     * 按时间维度拆分
     */
    public function timeDimension(string $timeDimension): self
    {
        $this->timeDimension = $timeDimension;
        return $this;
    }

    public function pageType(string $pageType): self
    {
        $this->pageType = $pageType;
        return $this;
    }

    public function filter(\Oceanengine\Models\ReportBrandDataV30Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    public function metrics(array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    public function page(\Oceanengine\Models\ReportBrandDataV30Page $page): self
    {
        $this->page = $page;
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
     * 查询品牌自助2.0数据报表
     */
    public function execute(): \Oceanengine\Models\ReportBrandDataV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->dataReportType === null) {
            throw new \InvalidArgumentException('dataReportType is required and must be specified');
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
        $queryParams['data_report_type'] = $this->dataReportType;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        if ($this->timeDimension !== null) {
            $queryParams['time_dimension'] = $this->timeDimension;
        }
        if ($this->pageType !== null) {
            $queryParams['page_type'] = $this->pageType;
        }
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        if ($this->metrics !== null) {
            $queryParams['metrics'] = $this->metrics;
        }
        if ($this->page !== null) {
            $__encoded1 = json_encode($this->page);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: page');
            }
            $queryParams['page'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/brand/data/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportBrandDataV30Response::class);

        return $result['model'];
    }
}
