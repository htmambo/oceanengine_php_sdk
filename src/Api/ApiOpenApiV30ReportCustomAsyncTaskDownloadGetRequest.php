<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_async_task_download_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 自定义报表-获取下载结果
 */
class ApiOpenApiV30ReportCustomAsyncTaskDownloadGetRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?int $advertiserId = null;
    private ?int $taskId = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportCustomAsyncTaskDownloadV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function advertiserId(int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

    public function taskId(int $taskId): self
    {
        $this->taskId = $taskId;
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
     * 自定义报表-获取下载结果
     */
    public function execute(): string
    {
        if ($this->advertiserId === null) {
            throw new \InvalidArgumentException('advertiserId is required and must be specified');
        }
        if ($this->advertiserId < 1) {
            throw new \InvalidArgumentException('advertiserId must be greater than 1');
        }
        if ($this->taskId === null) {
            throw new \InvalidArgumentException('taskId is required and must be specified');
        }
        if ($this->taskId < 1) {
            throw new \InvalidArgumentException('taskId must be greater than 1');
        }
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $queryParams['advertiser_id'] = $this->advertiserId;
        $queryParams['task_id'] = $this->taskId;
        $body = null;

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/custom/async_task/download/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('GET', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $requestContext['responseType'] = 'binary';
        $result = $this->apiClient->call($requestContext, \Oceanengine\Api\BinaryResponse::class);

        return $result['model'];
    }
}
