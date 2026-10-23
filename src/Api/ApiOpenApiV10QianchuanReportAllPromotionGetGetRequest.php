<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_all_promotion_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询千川广告主账号下乘方推广投放账户维度聚合数据。支持指标包含消耗，点击等
 */
class ApiOpenApiV10QianchuanReportAllPromotionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川业务账户ID，对应账户类型为&#x60;QIANCHUAN&#x60; */
    private ?int $advertiserId = null;
    /** @var string 查询统计数据开始时间，格式：&#x60;yyyy-mm-dd&#x60;，如：2021-04-05 00:00:00 */
    private ?string $startTime = null;
    /** @var string 查询统计数据结束时间，格式：&#x60;yyyy-mm-dd&#x60;，如：2021-04-05 23:59:59 */
    private ?string $endTime = null;
    /** @var string 所查询的计划类型，可选值:  - OVERALL_PROJECT 乘方计划 - UNI_PROJECT 全域计划 */
    private ?string $adlabScene = null;
    /** @var string[] 查询指标，详见应答中data描述的返回指标 */
    private ?array $fields = null;
    /** @var string 数据周期，允许值： - OVER_ALL_DATA 乘方期间数据 - UNI_DATA 全域期间数据 - ALL_DATA 整体数据 （默认值） 当且仅当 adlab_scene&#x3D;OVERALL_PROJECT 时支持传入 */
    private ?string $dataPeriod = null;
    /** @var string 按照营销目标过滤，允许值：  - &#x60;ALL&#x60; 全部（默认值） - &#x60;VIDEO_PROM_GOODS&#x60; 商品全域  - &#x60;LIVE_PROM_GOODS&#x60; 直播全域 */
    private ?string $marketingGoal = null;
    /** @var string 下单平台，允许值：  - &#x60;ALL&#x60; 全部  - &#x60;QIANCHUAN&#x60; 千川PC（默认值）  - &#x60;ECP_AWEME&#x60; 小店随心推，仅marketing_goal&#x3D;&#x60;ALL&#x60;时，支持传入 */
    private ?string $orderPlatform = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportAllPromotionGetV10ApiService $service)
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
     * 查询统计数据开始时间，格式：&#x60;yyyy-mm-dd&#x60;，如：2021-04-05 00:00:00
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 查询统计数据结束时间，格式：&#x60;yyyy-mm-dd&#x60;，如：2021-04-05 23:59:59
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 所查询的计划类型，可选值:  - OVERALL_PROJECT 乘方计划 - UNI_PROJECT 全域计划
     */
    public function adlabScene(string $adlabScene): self
    {
        $this->adlabScene = $adlabScene;
        return $this;
    }

    /**
     * 查询指标，详见应答中data描述的返回指标
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
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
     * 按照营销目标过滤，允许值：  - &#x60;ALL&#x60; 全部（默认值） - &#x60;VIDEO_PROM_GOODS&#x60; 商品全域  - &#x60;LIVE_PROM_GOODS&#x60; 直播全域
     */
    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 下单平台，允许值：  - &#x60;ALL&#x60; 全部  - &#x60;QIANCHUAN&#x60; 千川PC（默认值）  - &#x60;ECP_AWEME&#x60; 小店随心推，仅marketing_goal&#x3D;&#x60;ALL&#x60;时，支持传入
     */
    public function orderPlatform(string $orderPlatform): self
    {
        $this->orderPlatform = $orderPlatform;
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
     * 查询千川广告主账号下乘方推广投放账户维度聚合数据。支持指标包含消耗，点击等
     */
    public function execute(): \Oceanengine\Models\QianchuanReportAllPromotionGetV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        if ($this->adlabScene === null) {
            throw new \InvalidArgumentException('adlabScene is required and must be specified');
        }
        if ($this->fields === null) {
            throw new \InvalidArgumentException('fields is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        $queryParams['adlab_scene'] = $this->adlabScene;
        if ($this->dataPeriod !== null) {
            $queryParams['data_period'] = $this->dataPeriod;
        }
        if ($this->marketingGoal !== null) {
            $queryParams['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->orderPlatform !== null) {
            $queryParams['order_platform'] = $this->orderPlatform;
        }
        $queryParams['fields'] = $this->fields;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/all_promotion/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportAllPromotionGetV10Response::class);

        return $result['model'];
    }
}
