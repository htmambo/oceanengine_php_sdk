<?php

/**
 * 本文件由 go2php 生成，源: api_star_report_custom_data_topic_daily_report_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于获取每日趋势数据主题数据获取
 */
class ApiOpenApi2StarReportCustomDataTopicDailyReportGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 发起请求的客户的starId */
    private ?int $starId = null;
    /** @var int 交付作品Id：如视频Id、直播间room_id. */
    private ?int $workId = null;
    /** @var int 任务id */
    private ?int $demandId = null;
    /** @var string[] 数据主题: BASIC_DATA：基础信息、 FLOW_DATA：流量表现、 CONVERT_DATA：转化表现、 SEARCH_DATA：搜索表现、 RECOMMEND_DATA： 种草表现 */
    private ?array $topics = null;
    /** @var string 起始时间: yyyy-MM-dd */
    private ?string $startTime = null;
    /** @var string 结束时间: yyyy-MM-dd */
    private ?string $endTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarReportCustomDataTopicDailyReportV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 发起请求的客户的starId
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 交付作品Id：如视频Id、直播间room_id.
     */
    public function workId(int $workId): self
    {
        $this->workId = $workId;
        return $this;
    }

    /**
     * 任务id
     */
    public function demandId(int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 数据主题: BASIC_DATA：基础信息、 FLOW_DATA：流量表现、 CONVERT_DATA：转化表现、 SEARCH_DATA：搜索表现、 RECOMMEND_DATA： 种草表现
     */
    public function topics(array $topics): self
    {
        $this->topics = $topics;
        return $this;
    }

    /**
     * 起始时间: yyyy-MM-dd
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 结束时间: yyyy-MM-dd
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
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
     * 用于获取每日趋势数据主题数据获取
     */
    public function execute(): \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->workId === null) {
            throw new \InvalidArgumentException('workId is required and must be specified');
        }
        if ($this->demandId === null) {
            throw new \InvalidArgumentException('demandId is required and must be specified');
        }
        if ($this->topics === null) {
            throw new \InvalidArgumentException('topics is required and must be specified');
        }
        if ($this->startTime === null) {
            throw new \InvalidArgumentException('startTime is required and must be specified');
        }
        if ($this->endTime === null) {
            throw new \InvalidArgumentException('endTime is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['work_id'] = $this->workId;
        $queryParams['demand_id'] = $this->demandId;
        $queryParams['topics'] = $this->topics;
        $queryParams['start_time'] = $this->startTime;
        $queryParams['end_time'] = $this->endTime;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/report/custom_data_topic_daily_report/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarReportCustomDataTopicDailyReportV2Response::class);

        return $result['model'];
    }
}
