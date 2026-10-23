<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_async_task_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * 自定义报表—创建异步任务
 */
class ApiOpenApiV30ReportCustomAsyncTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ReportCustomAsyncTaskCreateV30Request $reportCustomAsyncTaskCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportCustomAsyncTaskCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function reportCustomAsyncTaskCreateV30Request(\Oceanengine\Models\ReportCustomAsyncTaskCreateV30Request $reportCustomAsyncTaskCreateV30Request): self
    {
        $this->reportCustomAsyncTaskCreateV30Request = $reportCustomAsyncTaskCreateV30Request;
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
     * 自定义报表—创建异步任务
     */
    public function execute(): \Oceanengine\Models\ReportCustomAsyncTaskCreateV30Response
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->reportCustomAsyncTaskCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/custom/async_task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $result = $this->apiClient->call($requestContext, \Oceanengine\Models\ReportCustomAsyncTaskCreateV30Response::class);

        return $result['model'];
    }
}
