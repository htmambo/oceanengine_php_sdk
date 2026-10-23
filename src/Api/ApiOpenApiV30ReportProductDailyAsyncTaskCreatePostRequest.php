<?php

/**
 * 本文件由 go2php 生成，源: api_report_product_daily_async_task_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * DPA天时级商品报表-创建
 */
class ApiOpenApiV30ReportProductDailyAsyncTaskCreatePostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ReportProductDailyAsyncTaskCreateV30Request $reportProductDailyAsyncTaskCreateV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportProductDailyAsyncTaskCreateV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function reportProductDailyAsyncTaskCreateV30Request(\Oceanengine\Models\ReportProductDailyAsyncTaskCreateV30Request $reportProductDailyAsyncTaskCreateV30Request): self
    {
        $this->reportProductDailyAsyncTaskCreateV30Request = $reportProductDailyAsyncTaskCreateV30Request;
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
     * DPA天时级商品报表-创建
     */
    public function execute(): string
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->reportProductDailyAsyncTaskCreateV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/product_daily/async_task/create/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $requestContext['responseType'] = 'binary';
        $result = $this->apiClient->call($requestContext, \Oceanengine\Api\BinaryResponse::class);

        return $result['model'];
    }
}
