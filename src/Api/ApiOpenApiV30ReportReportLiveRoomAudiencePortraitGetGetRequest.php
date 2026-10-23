<?php

/**
 * 本文件由 go2php 生成，源: api_report_report_live_room_audience_portrait_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 直播间受众分析报表
 */
class ApiOpenApiV30ReportReportLiveRoomAudiencePortraitGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $dimension = null;
    private ?\Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30Filtering $filtering = null;
    private ?string $startTime = null;
    private ?string $endTime = null;
    private ?array $fields = null;
    private ?string $orderField = null;
    private ?string $orderType = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportReportLiveRoomAudiencePortraitGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function dimension(string $dimension): self
    {
        $this->dimension = $dimension;
        return $this;
    }

    public function filtering(\Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
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

    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
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
     * 直播间受众分析报表
     */
    public function execute(): \Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->dimension === null) {
            throw new \InvalidArgumentException('dimension is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['dimension'] = $this->dimension;
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->fields !== null) {
            $queryParams['fields'] = $this->fields;
        }
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
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
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/report/live_room/audience/portrait/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportReportLiveRoomAudiencePortraitGetV30Response::class);

        return $result['model'];
    }
}
