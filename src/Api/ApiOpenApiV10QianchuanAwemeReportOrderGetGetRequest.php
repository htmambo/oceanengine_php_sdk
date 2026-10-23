<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_report_order_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 随心推报表
 */
class ApiOpenApiV10QianchuanAwemeReportOrderGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 开始时间，格式 2021-04-05 */
    private ?string $startDate = null;
    /** @var string 结束时间，格式 2021-04-05，时间跨度不能超过180天 */
    private ?string $endDate = null;
    private ?\Oceanengine\Models\QianchuanAwemeReportOrderGetV10Filtering $filtering = null;
    /** @var string[] 需要查询的消耗指标。不传递默认查询stat_cost */
    private ?array $fields = null;
    /** @var string 排序字段，允许值参考数据指标，默认不传为stat_cost */
    private ?string $orderField = null;
    /** @var string 排序方式，允许值： ASC 升序（默认）、DESC 降序 */
    private ?string $orderType = null;
    /** @var int 页码，默认值：1 */
    private ?int $page = null;
    /** @var \Oceanengine\Models\QianchuanAwemeReportOrderGetV10PageSize 页面大小，允许值：10, 20, 50, 100, 200，默认值：10 */
    private ?\Oceanengine\Models\QianchuanAwemeReportOrderGetV10PageSize $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeReportOrderGetV10ApiService $service)
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
     * 结束时间，格式 2021-04-05，时间跨度不能超过180天
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    public function filtering(\Oceanengine\Models\QianchuanAwemeReportOrderGetV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 需要查询的消耗指标。不传递默认查询stat_cost
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 排序字段，允许值参考数据指标，默认不传为stat_cost
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序方式，允许值： ASC 升序（默认）、DESC 降序
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
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
     * 页面大小，允许值：10, 20, 50, 100, 200，默认值：10
     */
    public function pageSize(\Oceanengine\Models\QianchuanAwemeReportOrderGetV10PageSize $pageSize): self
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
     * 随心推报表
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeReportOrderGetV10Response
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
        if ($this->fields !== null) {
            $queryParams['fields'] = $this->fields;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $__encoded1 = json_encode($this->pageSize);
            if ($__encoded1 === false) {
                throw new \RuntimeException('Failed to encode parameter: pageSize');
            }
            $queryParams['page_size'] = $__encoded1;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/aweme/report/order/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeReportOrderGetV10Response::class);

        return $result['model'];
    }
}
