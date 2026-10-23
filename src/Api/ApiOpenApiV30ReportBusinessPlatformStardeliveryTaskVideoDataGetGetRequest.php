<?php

/**
 * 本文件由 go2php 生成，源: api_report_business_platform_stardelivery_task_video_data_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星广短剧素材价值刻画报表
 */
class ApiOpenApiV30ReportBusinessPlatformStardeliveryTaskVideoDataGetGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 组织id */
    private ?int $organizationId = null;
    /** @var string 数据统计开始时间，格式：YYYY-MM-DD。闭区间,可选日期范围是2024-04-01及以后 需要与end_date 搭配使用 应答参数中指标如无特殊说明均支持数据统计日期筛选 */
    private ?string $startDate = null;
    /** @var string 数据统计结束时间，格式：YYYY-MM-DD。闭区间,可选日期范围是2024-04-01及以后 需要与start_date 搭配使用，一次时间筛选最大跨度为365天，超过报错 应答参数中指标如无特殊说明均支持数据统计日期筛选 */
    private ?string $endDate = null;
    /** @var \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30Filtering - 过滤条件，若此字段不传，或传空则视为无限制条件 - 多个条件之间为与关系，返回交集 */
    private ?\Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30Filtering $filtering = null;
    /** @var string 排序字段，部分统计指标可参与排序 - 默认: 按素材广告消耗倒序 - 支持排序的字段：   - IAP流水金额   - IAA广告消耗   - 自然播放量   - 广告播放量   - 点击量   - 转化量   - ROI0 */
    private ?string $orderField = null;
    /** @var string 排序方式；默认值: DESC； - ASC 顺序 - DESC倒序 */
    private ?string $orderType = null;
    /** @var int 页码，默认值: 1，page*page_size不能大于10000 */
    private ?int $page = null;
    /** @var int 页面数据量，默认值: 10，最大值100，page*page_size不能大于10000 */
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 组织id
     */
    public function organizationId(int $organizationId): self
    {
        $this->organizationId = $organizationId;
        return $this;
    }

    /**
     * 数据统计开始时间，格式：YYYY-MM-DD。闭区间,可选日期范围是2024-04-01及以后 需要与end_date 搭配使用 应答参数中指标如无特殊说明均支持数据统计日期筛选
     */
    public function startDate(string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * 数据统计结束时间，格式：YYYY-MM-DD。闭区间,可选日期范围是2024-04-01及以后 需要与start_date 搭配使用，一次时间筛选最大跨度为365天，超过报错 应答参数中指标如无特殊说明均支持数据统计日期筛选
     */
    public function endDate(string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * - 过滤条件，若此字段不传，或传空则视为无限制条件 - 多个条件之间为与关系，返回交集
     */
    public function filtering(\Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30Filtering $filtering): self
    {
        $this->filtering = $filtering;
        return $this;
    }

    /**
     * 排序字段，部分统计指标可参与排序 - 默认: 按素材广告消耗倒序 - 支持排序的字段：   - IAP流水金额   - IAA广告消耗   - 自然播放量   - 广告播放量   - 点击量   - 转化量   - ROI0
     */
    public function orderField(string $orderField): self
    {
        $this->orderField = $orderField;
        return $this;
    }

    /**
     * 排序方式；默认值: DESC； - ASC 顺序 - DESC倒序
     */
    public function orderType(string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     * 页码，默认值: 1，page*page_size不能大于10000
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面数据量，默认值: 10，最大值100，page*page_size不能大于10000
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
     * 获取星广短剧素材价值刻画报表
     */
    public function execute(): \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30Response
    {
        if ($this->organizationId === null) {
            throw new \InvalidArgumentException('organizationId is required and must be specified');
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
        $queryParams['organization_id'] = $this->organizationId;
        $queryParams['start_date'] = $this->startDate;
        $queryParams['end_date'] = $this->endDate;
        if ($this->filtering !== null) {
            $__encoded0 = json_encode($this->filtering);
            if ($__encoded0 === false) {
                throw new \RuntimeException('Failed to encode parameter: filtering');
            }
            $queryParams['filtering'] = $__encoded0;
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
        $url = '/open_api/v3.0/report/business_platform/stardelivery/task_video_data/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportBusinessPlatformStardeliveryTaskVideoDataGetV30Response::class);

        return $result['model'];
    }
}
