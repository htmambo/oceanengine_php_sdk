<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_advertiser_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于查询千川账户下标准推广投放账户维度聚合数据。仅支持传入账户类型为`QIANCHUAN`的账户；可通过get_tool_response_field_desc工具查询该工具支持的指标维度等信息
 */
class ApiOpenApiV10QianchuanReportAdvertiserGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川业务账户ID，对应账户类型为&#x60;QIANCHUAN&#x60; */
    private ?int $advertiserId = null;
    /** @var string 查询统计数据开始时间，格式：&#x60;yyyy-mm-dd&#x60;，如：2021-04-05 */
    private ?string $startDate = null;
    /** @var string 查询统计数据结束时间，格式：&#x60;yyyy-mm-dd&#x60;，如：2021-04-05 */
    private ?string $endDate = null;
    /** @var string[] 查询指标，详见应答中list描述的返回指标 */
    private ?array $fields = null;
    /** @var \Oceanengine\Models\QianchuanReportAdvertiserGetV10Filtering 过滤器 */
    private ?\Oceanengine\Models\QianchuanReportAdvertiserGetV10Filtering $filtering = null;
    /** @var string 返回数据时间聚合维度分组 ，允许值: - &#x60;TIME_GRANULARITY_DAILY&#x60;  天维度 - &#x60;TIME_GRANULARITY_HOURLY&#x60; 小时维度 */
    private ?string $timeGranularity = null;
    /** @var string 排序字段，详见应答中list描述的返回指标 默认排序字段：stat_cost */
    private ?string $orderField = null;
    /** @var string 排序方式，允许值： - &#x60;ASC&#x60; 升序（默认） - &#x60;DESC&#x60; 降序 */
    private ?string $orderType = null;
    /** @var int 页码，默认值&#x60;1&#x60; */
    private ?int $page = null;
    /** @var int 页面大小，默认为&#x60;10&#x60;，数值范围[1-500] */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportAdvertiserGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川业务账户ID，对应账户类型为&#x60;QIANCHUAN&#x60;
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 查询统计数据开始时间，格式：&#x60;yyyy-mm-dd&#x60;，如：2021-04-05
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 查询统计数据结束时间，格式：&#x60;yyyy-mm-dd&#x60;，如：2021-04-05
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 查询指标，详见应答中list描述的返回指标
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QianchuanReportAdvertiserGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 返回数据时间聚合维度分组 ，允许值: - &#x60;TIME_GRANULARITY_DAILY&#x60;  天维度 - &#x60;TIME_GRANULARITY_HOURLY&#x60; 小时维度
     */
    public function timeGranularity(string $timeGranularity): self
    {
        $this->timeGranularity = $timeGranularity;
        return $this;
    }

    /**
     * 排序字段，详见应答中list描述的返回指标 默认排序字段：stat_cost
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序方式，允许值： - &#x60;ASC&#x60; 升序（默认） - &#x60;DESC&#x60; 降序
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 页码，默认值&#x60;1&#x60;
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认为&#x60;10&#x60;，数值范围[1-500]
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
     * 用于查询千川账户下标准推广投放账户维度聚合数据。仅支持传入账户类型为`QIANCHUAN`的账户；可通过get_tool_response_field_desc工具查询该工具支持的指标维度等信息
     */
    public function execute(): \Oceanengine\Models\QianchuanReportAdvertiserGetV10Response
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
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        if ($this->filtering === null) {
            throw new \InvalidArgumentException('filtering is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        $queryParams['fields'] = $this->fields;
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        if ($this->timeGranularity !== null) {
            $queryParams['time_granularity'] = $this->timeGranularity;
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
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/advertiser/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportAdvertiserGetV10Response::class);

        return $result['model'];
    }
}
