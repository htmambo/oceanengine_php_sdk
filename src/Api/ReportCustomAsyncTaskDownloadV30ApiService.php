<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_async_task_download_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportCustomAsyncTaskDownloadV30ApiService
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
     * 自定义报表-获取下载结果
     */
    public function get(): ApiOpenApiV30ReportCustomAsyncTaskDownloadGetRequest
    {
        return new ApiOpenApiV30ReportCustomAsyncTaskDownloadGetRequest($this);
    }
}
