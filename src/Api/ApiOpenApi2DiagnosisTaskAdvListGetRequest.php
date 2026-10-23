<?php

/**
 * 本文件由 go2php 生成，源: api_diagnosis_task_adv_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * Adv获取前测任务列表
 */
class ApiOpenApi2DiagnosisTaskAdvListGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?array $results = null;
    private ?array $status = null;
    private ?int $startTime = null;
    private ?int $endTime = null;
    private ?int $page = null;
    private ?int $pageSize = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(DiagnosisTaskAdvListV2ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function results(array $results): self
    {
        $this->results = $results;
        return $this;
    }

    public function status(array $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function startTime(int $startTime): self
    {
        $this->startTime = $startTime;
        return $this;
    }

    public function endTime(int $endTime): self
    {
        $this->endTime = $endTime;
        return $this;
    }

    public function page(int $page): self
    {
        $this->page = $page;
        return $this;
    }

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
     * Adv获取前测任务列表
     */
    public function execute(): \Oceanengine\Models\DiagnosisTaskAdvListV2Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        if ($this->advertiserId !== null) {
            $queryParams['advertiser_id'] = $this->advertiserId;
        }
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
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/2/diagnosis_task/adv/list/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\DiagnosisTaskAdvListV2Response::class);

        return $result['model'];
    }
}
