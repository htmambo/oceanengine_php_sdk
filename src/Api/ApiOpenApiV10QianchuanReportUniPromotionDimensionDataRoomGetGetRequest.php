<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_uni_promotion_dimension_data_room_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * /qianchuan/report/uni_promotion/dimension_data/room/get/
 */
class ApiOpenApiV10QianchuanReportUniPromotionDimensionDataRoomGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $roomId = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    private ?string $dimension = null;
    private ?array $metrics = null;
    private ?string $orderField = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;
    /** @var int 页码 */
    private ?int $page = null;
    /** @var int 页面大小 */
    private ?int $pageSize = null;
    /** @var \Oceanengine\Models\QianchuanReportUniPromotionDimensionDataRoomGetV10Filtering 过滤器 */
    private ?\Oceanengine\Models\QianchuanReportUniPromotionDimensionDataRoomGetV10Filtering $filtering = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportUniPromotionDimensionDataRoomGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function roomId(int $roomId): self
    {
        $this->roomId = $roomId;
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

    public function dimension(string $dimension): self
    {
        $this->dimension = $dimension;
        return $this;
    }

    public function metrics(array $metrics): self
    {
        $this->metrics = $metrics;
        return $this;
    }

    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
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
     * 页码
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QianchuanReportUniPromotionDimensionDataRoomGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * /qianchuan/report/uni_promotion/dimension_data/room/get/
     */
    public function execute(): \Oceanengine\Models\QianchuanReportUniPromotionDimensionDataRoomGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->roomId === null) {
            throw new \InvalidArgumentException('roomId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['room_id'] = $this->roomId;
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->dimension !== null) {
            $queryParams['dimension'] = $this->dimension;
        }
        if ($this->metrics !== null) {
            $queryParams['metrics'] = $this->metrics;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/uni_promotion/dimension_data/room/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportUniPromotionDimensionDataRoomGetV10Response::class);

        return $result['model'];
    }
}
