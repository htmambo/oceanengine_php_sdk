<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_order_report_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取随心推全域订单数据
 */
class ApiOpenApiV10QianchuanAwemeUniPromotionOrderReportGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    /** @var string 查询数据开始日期，例如2021-04-05，开始时间不可超过「当前日期-180天」 */
    private ?string $startDate = null;
    /** @var string 查询数据结束日期，例如2021-04-05，日期跨度不能超过180天 */
    private ?string $endDate = null;
    /** @var string 时间粒度 ，如果不传，返回查询日期内的聚合数据 */
    private ?string $timeGranularity = null;
    /** @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10Filter 过滤条件 */
    private ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10Filter $filter = null;
    /** @var string 排序类型 */
    private ?string $orderType = null;
    /** @var string 排序字段 */
    private ?string $orderField = null;
    /** @var int 页码，默认值：1 */
    private ?int $page = null;
    /** @var \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10PageSize 页面大小，允许值：10, 20, 50, 100，默认值：10 */
    private ?\Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10PageSize $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanAwemeUniPromotionOrderReportGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 查询数据开始日期，例如2021-04-05，开始时间不可超过「当前日期-180天」
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 查询数据结束日期，例如2021-04-05，日期跨度不能超过180天
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * 时间粒度 ，如果不传，返回查询日期内的聚合数据
     */
    public function timeGranularity(string $timeGranularity): self
    {
        $this->timeGranularity = $timeGranularity;
        return $this;
    }

    /**
     * 过滤条件
     */
    public function filter(\Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10Filter $filter): self
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * 排序类型
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
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
    public function pageSize(\Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10PageSize $pageSize): self
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
     * 获取随心推全域订单数据
     */
    public function execute(): \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10Response
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
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        if ($this->timeGranularity !== null) {
            $queryParams['time_granularity'] = $this->timeGranularity;
        }
        if ($this->filter !== null) {
            $__encoded0 = json_encode($this->filter);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filter');
            }
            $queryParams['filter'] = $__encoded0;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
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
        $url = '/open_api/v1.0/qianchuan/aweme/uni_promotion/order/report/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanAwemeUniPromotionOrderReportGetV10Response::class);

        return $result['model'];
    }
}
