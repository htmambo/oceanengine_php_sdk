<?php

/**
 * 本文件由 go2php 生成，源: api_report_product_hourly_async_task_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportProductHourlyAsyncTaskCreateV30ApiService
{
    private \Oceanengine\ApiClient $apiClient;

    public function __construct(\Oceanengine\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function getApiClient(): \Oceanengine\ApiClient
    {
        return $this->apiClient;
    }

    /**
     * 创建异步报表任务
     */
    public function post(): ApiOpenApiV30ReportProductHourlyAsyncTaskCreatePostRequest
    {
        return new ApiOpenApiV30ReportProductHourlyAsyncTaskCreatePostRequest($this);
    }
}
