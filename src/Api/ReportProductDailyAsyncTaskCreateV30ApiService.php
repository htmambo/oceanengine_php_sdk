<?php

/**
 * 本文件由 go2php 生成，源: api_report_product_daily_async_task_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportProductDailyAsyncTaskCreateV30ApiService
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
     * DPA天时级商品报表-创建
     */
    public function post(): ApiOpenApiV30ReportProductDailyAsyncTaskCreatePostRequest
    {
        return new ApiOpenApiV30ReportProductDailyAsyncTaskCreatePostRequest($this);
    }
}
