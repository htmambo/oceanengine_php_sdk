<?php

/**
 * 本文件由 go2php 生成，源: api_report_product_async_task_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

/**
 * DPA商品报表-查询
 */
class ApiOpenApiV30ReportProductAsyncTaskGetPostRequest
{
    private \Oceanengine\ApiClient $apiClient;

    private ?\Oceanengine\Models\ReportProductAsyncTaskGetV30Request $reportProductAsyncTaskGetV30Request = null;

    /** @var string|null Access-Token */
    private ?string $accessToken = null;

    private bool $logEnabled = false;

    public function __construct(ReportProductAsyncTaskGetV30ApiService $service)
    {
        $this->apiClient = $service->getApiClient();
    }

    public function reportProductAsyncTaskGetV30Request(\Oceanengine\Models\ReportProductAsyncTaskGetV30Request $reportProductAsyncTaskGetV30Request): self
    {
        $this->reportProductAsyncTaskGetV30Request = $reportProductAsyncTaskGetV30Request;
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
     * DPA商品报表-查询
     */
    public function execute(): string
    {
        $queryParams = [];
        $formParams = [];
        $files = [];
        $headers = [];
        $headers['Content-Type'] = 'application/json';
        $body = json_encode($this->reportProductAsyncTaskGetV30Request);
        if ($body === false) {
            throw new \RuntimeException('Failed to encode request body');
        }

        $queryString = $this->apiClient->buildQuery($queryParams);
        $url = '/open_api/v3.0/report/product/async_task/get/' . ($queryString === '' ? '' : '?' . $queryString);
        $requestContext = $this->apiClient->prepareRequest('POST', $url, $headers, $body, $files);
        $requestContext['accessToken'] = $this->accessToken;
        $requestContext['enableLog'] = $this->logEnabled;
        $requestContext['responseType'] = 'binary';
        $result = $this->apiClient->call($requestContext, \Oceanengine\Api\BinaryResponse::class);

        return $result['model'];
    }
}
