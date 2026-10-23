<?php

/**
 * 本文件由 go2php 生成，源: api_report_product_async_task_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportProductAsyncTaskGetV30ApiService
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
     * DPA商品报表-查询
     */
    public function post(): ApiOpenApiV30ReportProductAsyncTaskGetPostRequest
    {
        return new ApiOpenApiV30ReportProductAsyncTaskGetPostRequest($this);
    }
}
