<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_control_task_list_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取调控任务列表
 */
class ApiOpenApiV10QianchuanUniPromotionAdControlTaskListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?string $marketingGoal = null;
    /** @var int 调控的目标全域控计划ID */
    private ?int $adId = null;
    /** @var string 数据统计周期 开始时间，格式 2021-04-05 00:00:00 */
    private ?string $startTime = null;
    /** @var string 数据统计周期 开始时间，格式 2021-04-05 00:00:00 */
    private ?string $endTime = null;
    /** @var string 调控任务类型， SMART_BOOST 一键起量 */
    private ?string $scene = null;
    /** @var string[] 查询指标 */
    private ?array $fields = null;
    /** @var \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10Filtering 过滤器 */
    private ?\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10Filtering $filtering = null;
    /** @var string 排序方式，允许值： ASC 升序（默认）、DESC 降序 */
    private ?string $orderType = null;
    /** @var string 排序字段，默认计划创建时间倒序，同时支持根据消耗指标排序 */
    private ?string $orderField = null;
    /** @var int 页码，默认值：1 */
    private ?int $page = null;
    /** @var int 页面大小，允许值：10, 20, 50, 100，默认值：10 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(QianchuanUniPromotionAdControlTaskListV10ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function marketingGoal(string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * 调控的目标全域控计划ID
     */
    public function adId(int $adId): self
    {
        $this->adId = $adId;
        return $this;
    }

    /**
     * 数据统计周期 开始时间，格式 2021-04-05 00:00:00
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 数据统计周期 开始时间，格式 2021-04-05 00:00:00
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 调控任务类型， SMART_BOOST 一键起量
     */
    public function scene(string $scene): self
    {
        $this->scene = $scene;
        return $this;
    }

    /**
     * 查询指标
     */
    public function fields(array $fields): self
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 过滤器
     */
    public function filtering(\Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10Filtering $filtering): self
    {
        $this->filtering = $filtering;
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
     * 排序字段，默认计划创建时间倒序，同时支持根据消耗指标排序
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
     * 获取调控任务列表
     */
    public function execute(): \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10Response
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->marketingGoal === null) {
            throw new \InvalidArgumentException('marketingGoal is required and must be specified');
        }
        if ($this->adId === null) {
            throw new \InvalidArgumentException('adId is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        if ($this->scene === null) {
            throw new \InvalidArgumentException('scene is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['marketing_goal'] = $this->marketingGoal;
        $queryParams['ad_id'] = $this->adId;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        if ($this->fields !== null) {
            $queryParams['fields'] = $this->fields;
        }
        $queryParams['scene'] = $this->scene;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
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
            $queryParams['page_size'] = $this->pageSize;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v1.0/qianchuan/uni_promotion/ad/control_task/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\QianchuanUniPromotionAdControlTaskListV10Response::class);

        return $result['model'];
    }
}
