<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_uni_promotion_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 查询千川广告主账号下全域推广投放账户维度聚合数据。支持指标包含消耗，点击等（可通过get_tool_response_field_desc工具查询应答内容）
 */
class ApiOpenApiV10QianchuanReportUniPromotionGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 千川业务账户ID，对应账户类型为&#x60;QIANCHUAN&#x60; */
    private ?int $advertiserId = null;
    /** @var string 查询统计数据开始时间，格式：&#x60;yyyy-mm-dd HH:mm:ss&#x60;，如：2021-04-05 00:00:00 */
    private ?string $startDate = null;
    /** @var string 查询统计数据结束时间，格式：&#x60;yyyy-mm-dd HH:mm:ss&#x60;，如：2021-04-05 23:59:59。结束时间不能早于开始时间 */
    private ?string $endDate = null;
    /** @var string[] 查询指标，详见应答中data描述的返回指标 */
    private ?array $fields = null;
    /** @var string 按照营销目标过滤，允许值：  - &#x60;ALL&#x60; 全部（默认值） - &#x60;VIDEO_PROM_GOODS&#x60; 商品全域  - &#x60;LIVE_PROM_GOODS&#x60; 直播全域 */
    private ?string $marketingGoal = null;
    /** @var string 下单平台，允许值：  - &#x60;ALL&#x60; 全部  - &#x60;QIANCHUAN&#x60; 千川PC（默认值）  - &#x60;ECP_AWEME&#x60; 小店随心推，仅marketing_goal&#x3D;&#x60;ALL&#x60;时，支持传入 */
    private ?string $orderPlatform = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanReportUniPromotionGetV10ApiService $service)
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
     * 查询统计数据开始时间，格式：&#x60;yyyy-mm-dd HH:mm:ss&#x60;，如：2021-04-05 00:00:00
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 查询统计数据结束时间，格式：&#x60;yyyy-mm-dd HH:mm:ss&#x60;，如：2021-04-05 23:59:59。结束时间不能早于开始时间
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
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
     * 查询千川广告主账号下全域推广投放账户维度聚合数据。支持指标包含消耗，点击等（可通过get_tool_response_field_desc工具查询应答内容）
     */
    public function execute(): \Oceanengine\Models\QianchuanReportUniPromotionGetV10Response
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
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        if ($this->marketingGoal !== null) {
            $queryParams['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->orderPlatform !== null) {
            $queryParams['order_platform'] = $this->orderPlatform;
        }
        $queryParams['fields'] = $this->fields;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/report/uni_promotion/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanReportUniPromotionGetV10Response::class);

        return $result['model'];
    }
}
