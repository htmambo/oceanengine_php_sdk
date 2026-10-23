<?php

/**
 * 本文件由 go2php 生成，源: api_star_report_custom_data_topic_report_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 用于获取累计数据主题对应指标的数据的获取
 */
class ApiOpenApi2StarReportCustomDataTopicReportGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $starId = null;
    /** @var int 交付作品Id：如视频Id、直播间Id */
    private ?int $workId = null;
    /** @var int 任务id */
    private ?int $demandId = null;
    /** @var string[] 数据主题: BASIC_DATA：基础信息、 FLOW_DATA：流量表现、 CONVERT_DATA：转化表现、 SEARCH_DATA：搜索表现、 RECOMMEND_DATA： 种草表现、 DY_SHOP_DATA：抖音进店、 USER_DISTRIBUTION_DATA：用户画像、 INDEX_SCORE_DATA： 指数得分、 COMMENT_DATA：评论数据 直播用户画像仅保留近90天且直播时长 &gt;&#x3D; 25 分钟直播数据 */
    private ?array $topics = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarReportCustomDataTopicReportV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 交付作品Id：如视频Id、直播间Id
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
     * 数据主题: BASIC_DATA：基础信息、 FLOW_DATA：流量表现、 CONVERT_DATA：转化表现、 SEARCH_DATA：搜索表现、 RECOMMEND_DATA： 种草表现、 DY_SHOP_DATA：抖音进店、 USER_DISTRIBUTION_DATA：用户画像、 INDEX_SCORE_DATA： 指数得分、 COMMENT_DATA：评论数据 直播用户画像仅保留近90天且直播时长 &gt;&#x3D; 25 分钟直播数据
     */
    public function topics(array $topics): self
    {
        $this->topics = $topics;
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
     * 用于获取累计数据主题对应指标的数据的获取
     */
    public function execute(): \Oceanengine\Models\StarReportCustomDataTopicReportV2Response
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
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        $queryParams['work_id'] = $this->workId;
        $queryParams['demand_id'] = $this->demandId;
        $queryParams['topics'] = $this->topics;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/report/custom_data_topic_report/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarReportCustomDataTopicReportV2Response::class);

        return $result['model'];
    }
}
