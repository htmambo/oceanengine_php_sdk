<?php

/**
 * 本文件由 go2php 生成，源: api_report_live_room_analysis_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询直播间相关数据
 */
class ApiOpenApiV30ReportLiveRoomAnalysisGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 广告主id */
    private ?int $advertiserId = null;
    /** @var \Oceanengine\Models\ReportLiveRoomAnalysisGetV30Filtering 过滤器 */
    private ?\Oceanengine\Models\ReportLiveRoomAnalysisGetV30Filtering $filtering = null;
    /** @var string 报表开始时间，格式为%Y-%m-%d %H:%M:%S，默认从7天前开始，仅支持查询2020年7月1日之后的数据 （目前仅支持天级别的数据查询，请从0点开始查询，否则返回值为空） */
    private ?string $startTime = null;
    /** @var string 报表结束时间，格式为%Y-%m-%d %H:%M:%S，默认为今天，最大时间范围30天 */
    private ?string $endTime = null;
    /** @var string[] 指标字段 */
    private ?array $fields = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportLiveRoomAnalysisGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
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
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\ReportLiveRoomAnalysisGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 报表开始时间，格式为%Y-%m-%d %H:%M:%S，默认从7天前开始，仅支持查询2020年7月1日之后的数据 （目前仅支持天级别的数据查询，请从0点开始查询，否则返回值为空）
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 报表结束时间，格式为%Y-%m-%d %H:%M:%S，默认为今天，最大时间范围30天
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 指标字段
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 排序字段
     */
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
     * 查询直播间相关数据
     */
    public function execute(): \Oceanengine\Models\ReportLiveRoomAnalysisGetV30Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
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
        $url = '/open_api/v3.0/report/live_room/analysis/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportLiveRoomAnalysisGetV30Response::class);

        return $result['model'];
    }
}
