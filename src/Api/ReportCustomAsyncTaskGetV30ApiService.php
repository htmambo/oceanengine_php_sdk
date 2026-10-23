<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_async_task_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportCustomAsyncTaskGetV30ApiService
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
     * 自定义报表-获取异步任务列表
     */
    public function get(): ApiOpenApiV30ReportCustomAsyncTaskGetGetRequest
    {
        return new ApiOpenApiV30ReportCustomAsyncTaskGetGetRequest($this);
    }
}
