<?php

/**
 * 本文件由 go2php 生成，源: api_star_data_task_timeline_report_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 获取星图项目/视频转化信息for外部电商
 */
class ApiOpenApi2StarDataTaskTimelineReportGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 客户星图id */
    private ?int $starId = null;
    /** @var string 时间分区，格式 yyyyMMdd */
    private ?string $partition = null;
    /** @var string[] 外部项目ID */
    private ?array $outerProjectIdList = null;
    /** @var string[] 外部任务ID */
    private ?array $outerTaskIdList = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(StarDataTaskTimelineReportV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 客户星图id
     */
    public function starId(int $starId): self
    {
        $this->starId = $starId;
        return $this;
    }

    /**
     * 时间分区，格式 yyyyMMdd
     */
    public function partition(string $partition): self
    {
        $this->partition = $partition;
        return $this;
    }

    /**
     * 外部项目ID
     */
    public function outerProjectIdList(array $outerProjectIdList): self
    {
        $this->outerProjectIdList = $outerProjectIdList;
        return $this;
    }

    /**
     * 外部任务ID
     */
    public function outerTaskIdList(array $outerTaskIdList): self
    {
        $this->outerTaskIdList = $outerTaskIdList;
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
     * 获取星图项目/视频转化信息for外部电商
     */
    public function execute(): \Oceanengine\Models\StarDataTaskTimelineReportV2Response
    {
        if ($this->starId === null) {
            throw new \InvalidArgumentException('starId is required and must be specified');
        }
        if ($this->partition === null) {
            throw new \InvalidArgumentException('partition is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['star_id'] = $this->starId;
        if ($this->outerProjectIdList !== null) {
            $queryParams['outer_project_id_list'] = $this->outerProjectIdList;
        }
        if ($this->outerTaskIdList !== null) {
            $queryParams['outer_task_id_list'] = $this->outerTaskIdList;
        }
        $queryParams['partition'] = $this->partition;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/star/data/task_timeline_report/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\StarDataTaskTimelineReportV2Response::class);

        return $result['model'];
    }
}
