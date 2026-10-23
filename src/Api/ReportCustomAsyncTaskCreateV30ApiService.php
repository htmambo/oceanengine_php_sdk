<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_async_task_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportCustomAsyncTaskCreateV30ApiService
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
     * 自定义报表—创建异步任务
     */
    public function post(): ApiOpenApiV30ReportCustomAsyncTaskCreatePostRequest
    {
        return new ApiOpenApiV30ReportCustomAsyncTaskCreatePostRequest($this);
    }
}
