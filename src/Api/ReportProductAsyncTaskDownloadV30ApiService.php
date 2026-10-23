<?php

/**
 * 本文件由 go2php 生成，源: api_report_product_async_task_download_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportProductAsyncTaskDownloadV30ApiService
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
     * DPA商品报表-任务触发
     */
    public function get(): ApiOpenApiV30ReportProductAsyncTaskDownloadGetRequest
    {
        return new ApiOpenApiV30ReportProductAsyncTaskDownloadGetRequest($this);
    }
}
