<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_tools_smart_boost_ad_boost_report_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * https://bytedance.feishu.cn/wiki/wikcnq0rDUKyzKVSPWUAt6EJD4b
 */
class ApiOpenApiV10QianchuanToolsSmartBoostAdBoostReportGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川广告主账户ID */
    private ?int $advertiserId = null;
    /** @var int 广告计划ID */
    private ?int $adId = null;
    /** @var int 起量版本号，通过【获取起量版本信息】接口获取 */
    private ?int $adRaiseVersion = null;
    /** @var string 当前起量版本起量开始时间，格式：2021-03-31 16:00:00，通过【获取起量版本信息】接口获取 */
    private ?string $startTime = null;
    /** @var string 当前起量版本起量结束时间，格式：2021-03-31 17:00:00，结束时间必须大于开始时间，通过【获取起量版本信息】接口获取 */
    private ?string $endTime = null;
    /** @var int 页码，默认值：1 */
    private ?int $page = null;
    /** @var int 页面大小，允许值：10, 20, 50, 100，默认值：10 */
    private ?int $pageSize = null;
    /** @var string 时间粒度，如果不传，返回查询日期内的聚合数据 允许值: 1、STAT_TIME_GRANULARITY_HOURLY 获取分小时数据 */
    private ?string $timeGranularity = null;
    /** @var string[] 指定需要的指标名称，可参考应答参数返回的消耗指标字段，默认stat_cost，允许值：stat_cost,ctr,convert_cnt,convert_rate,prepay_and_pay_order_roi,show_cnt,click_cnt,pay_order_amount_gmv */
    private ?array $filed = null;
    /** @var string 排序字段，默认不传为stat_time_hour，允许值：stat_cost,ctr,convert_cnt,convert_rate,prepay_and_pay_order_roi,show_cnt,click_cnt,pay_order_amount_gmv,stat_time_hour */
    private ?string $orderField = null;
    /** @var string 排序方式 */
    private ?string $orderType = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanToolsSmartBoostAdBoostReportGetV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 千川广告主账户ID
     */
    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    /**
     * 广告计划ID
     */
    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 起量版本号，通过【获取起量版本信息】接口获取
     */
    public function adRaiseVersion(int $adRaiseVersion): self
    {
        $this->adRaiseVersion = $adRaiseVersion;
        return $this;
    }

    /**
     * 当前起量版本起量开始时间，格式：2021-03-31 16:00:00，通过【获取起量版本信息】接口获取
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 当前起量版本起量结束时间，格式：2021-03-31 17:00:00，结束时间必须大于开始时间，通过【获取起量版本信息】接口获取
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
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
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 时间粒度，如果不传，返回查询日期内的聚合数据 允许值: 1、STAT_TIME_GRANULARITY_HOURLY 获取分小时数据
     */
    public function timeGranularity(string $timeGranularity): self
    {
        $this->timeGranularity = $timeGranularity;
        return $this;
    }

    /**
     * 指定需要的指标名称，可参考应答参数返回的消耗指标字段，默认stat_cost，允许值：stat_cost,ctr,convert_cnt,convert_rate,prepay_and_pay_order_roi,show_cnt,click_cnt,pay_order_amount_gmv
     */
    public function filed(array $filed): self
    {
        $this->filed = $filed;
        return $this;
    }

    /**
     * 排序字段，默认不传为stat_time_hour，允许值：stat_cost,ctr,convert_cnt,convert_rate,prepay_and_pay_order_roi,show_cnt,click_cnt,pay_order_amount_gmv,stat_time_hour
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
     * https://bytedance.feishu.cn/wiki/wikcnq0rDUKyzKVSPWUAt6EJD4b
     */
    public function execute(): \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->adId === null) {
            throw new \InvalidArgumentException('adId is required and must be specified');
        }
        if ($this->adRaiseVersion === null) {
            throw new \InvalidArgumentException('adRaiseVersion is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        if ($this->page === null) {
            throw new \InvalidArgumentException('page is required and must be specified');
        }
        if ($this->pageSize === null) {
            throw new \InvalidArgumentException('pageSize is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['ad_id'] = $this->adId;
        $queryParams['ad_raise_version'] = $this->adRaiseVersion;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        if ($this->timeGranularity !== null) {
            $queryParams['time_granularity'] = $this->timeGranularity;
        }
        if ($this->filed !== null) {
            $queryParams['filed'] = $this->filed;
        }
        if ($this->orderField !== null) {
            $queryParams['order_field'] = $this->orderField;
        }
        if ($this->orderType !== null) {
            $queryParams['order_type'] = $this->orderType;
        }
        $queryParams['page'] = $this->page;
        $queryParams['page_size'] = $this->pageSize;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/tools/smart_boost/ad_boost/report/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanToolsSmartBoostAdBoostReportGetV10Response::class);

        return $result['model'];
    }
}
