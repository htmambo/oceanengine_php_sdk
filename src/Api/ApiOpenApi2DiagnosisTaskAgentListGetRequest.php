<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_agent_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 代理商获取前测任务列表
 */
class ApiOpenApi2DiagnosisTaskAgentListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    /** @var int 代理商ID */
    private ?int $agentId = null;
    /** @var string[] 根据任务结果筛选 允许值： FIRST_PUBLISH_MATERIAL 首发素材 NON_FIRST_PUBLISH_MATERIAL 非首发素材 AD_HIGH_QUALITY_MATERIAL AD优质素材 NON_AD_HIGH_QUALITY_MATERIAL AD非优质素材 ECP_HIGH_QUALITY_MATERIAL 千川优质素材 NON_ECP_HIGH_QUALITY_MATERIAL 千川非优质素材 INEFFICIENT_MATERIAL 低效素材 NON_INEFFICIENT_MATERIAL 非低效素材 */
    private ?array $results = null;
    /** @var string[] 根据任务状态筛选，允许值： PENDING SUCCESS FAILED */
    private ?array $status = null;
    /** @var string 根据任务创建时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd */
    private ?string $startTime = null;
    /** @var string 根据任务创建时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd */
    private ?string $endTime = null;
    /** @var int 页码，默认值1 */
    private ?int $page = null;
    /** @var int 页面大小，默认值20 */
    private ?int $pageSize = null;
    /** @var string 根据任务创建时间进行过滤的起始时间，优先级高于start_time，与end_date_time搭配使用，格式：yyyy-mm-dd hh:mm:ss */
    private ?string $startDateTime = null;
    /** @var string 根据任务创建时间进行过滤的截止时间，优先级高于end_time，与start_date_time搭配使用，格式：yyyy-mm-dd hh:mm:ss */
    private ?string $endDateTime = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DiagnosisTaskAgentListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    /**
     * 代理商ID
     */
    public function agentId(int $agentId): self
    {
        $this->agentId = $agentId;
        return $this;
    }

    /**
     * 根据任务结果筛选 允许值： FIRST_PUBLISH_MATERIAL 首发素材 NON_FIRST_PUBLISH_MATERIAL 非首发素材 AD_HIGH_QUALITY_MATERIAL AD优质素材 NON_AD_HIGH_QUALITY_MATERIAL AD非优质素材 ECP_HIGH_QUALITY_MATERIAL 千川优质素材 NON_ECP_HIGH_QUALITY_MATERIAL 千川非优质素材 INEFFICIENT_MATERIAL 低效素材 NON_INEFFICIENT_MATERIAL 非低效素材
     */
    public function results(array $results): self
    {
        $this->results = $results;
        return $this;
    }

    /**
     * 根据任务状态筛选，允许值： PENDING SUCCESS FAILED
     */
    public function status(array $status): self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 根据任务创建时间进行过滤的起始时间，与end_time搭配使用，格式：yyyy-mm-dd
     */
    public function startTime(string $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * 根据任务创建时间进行过滤的截止时间，与start_time搭配使用，格式：yyyy-mm-dd
     */
    public function endTime(string $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * 页码，默认值1
     */
    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

    /**
     * 页面大小，默认值20
     */
    public function pageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * 根据任务创建时间进行过滤的起始时间，优先级高于start_time，与end_date_time搭配使用，格式：yyyy-mm-dd hh:mm:ss
     */
    public function startDateTime(string $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * 根据任务创建时间进行过滤的截止时间，优先级高于end_time，与start_date_time搭配使用，格式：yyyy-mm-dd hh:mm:ss
     */
    public function endDateTime(string $endDateTime): self
    {
        $this->endDateTime = $endDateTime;
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
     * 代理商获取前测任务列表
     */
    public function execute(): \Oceanengine\Models\DiagnosisTaskAgentListV2Response
    {
        if ($this->agentId === null) {
            throw new \InvalidArgumentException('agentId is required and must be specified');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['agent_id'] = $this->agentId;
        if ($this->results !== null) {
            $queryParams['results'] = $this->results;
        }
        if ($this->status !== null) {
            $queryParams['status'] = $this->status;
        }
        if ($this->startTime !== null) {
            $queryParams['start_time'] = $this->startTime;
        }
        if ($this->endTime !== null) {
            $queryParams['end_time'] = $this->endTime;
        }
        if ($this->page !== null) {
            $queryParams['page'] = $this->page;
        }
        if ($this->pageSize !== null) {
            $queryParams['page_size'] = $this->pageSize;
        }
        if ($this->startDateTime !== null) {
            $queryParams['start_date_time'] = $this->startDateTime;
        }
        if ($this->endDateTime !== null) {
            $queryParams['end_date_time'] = $this->endDateTime;
        }
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/diagnosis_task/agent/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DiagnosisTaskAgentListV2Response::class);

        return $result['model'];
    }
}
