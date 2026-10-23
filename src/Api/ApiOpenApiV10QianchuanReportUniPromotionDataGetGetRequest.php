<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_uni_promotion_data_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取全域数据
 */
class ApiOpenApiV10QianchuanReportUniPromotionDataGetGetRequest
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
    /** @var string 数据周期，允许值： - OVER_ALL_DATA 乘方期间数据 - UNI_DATA 全域期间数据 - ALL_DATA 整体数据 （默认值） 当且仅当 adlab_scene&#x3D;OVERALL_PROJECT 时支持传入 */
    private ?string $dataPeriod = null;
    /** @var int 第几页 */
    private ?int $page = null;
    /** @var \Oceanengine\Models\QianchuanReportUniPromotionDataGetV10PageSize 页大小 */
    private ?\Oceanengine\Models\QianchuanReportUniPromotionDataGetV10PageSize $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportUniPromotionDataGetV10ApiService $service)
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
     * 数据周期，允许值： - OVER_ALL_DATA 乘方期间数据 - UNI_DATA 全域期间数据 - ALL_DATA 整体数据 （默认值） 当且仅当 adlab_scene&#x3D;OVERALL_PROJECT 时支持传入
     */
    public function dataPeriod(string $dataPeriod): self
    {
        $this->dataPeriod = $dataPeriod;
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
    public function pageSize(\Oceanengine\Models\QianchuanReportUniPromotionDataGetV10PageSize $pageSize): self
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
     * 获取全域数据
     */
    public function execute(): \Oceanengine\Models\QianchuanReportUniPromotionDataGetV10Response
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
        if ($this->orderBy === null) {
            throw new \InvalidArgumentException('orderBy is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['data_topic'] = $this->dataTopic;
        if ($this->dataPeriod !== null) {
            $queryParams['data_period'] = $this->dataPeriod;
        }
        $queryParams['dimensions'] = $this->dimensions;
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
            $__encoded2 = json_encode($this->pageSize);
            if ($__encoded2 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageSize');
            }
            $queryParams['page_size'] = $__encoded2;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/uni_promotion/data/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportUniPromotionDataGetV10Response::class);

        return $result['model'];
    }
}
