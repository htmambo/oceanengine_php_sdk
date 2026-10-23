<?php

/**
 * 本文件由 go2php 生成，源: api_async_task_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AsyncTaskGetV2ApiService
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
     * 异步数据报表-获取任务列表
     */
    public function get(): ApiOpenApi2AsyncTaskGetGetRequest
    {
        return new ApiOpenApi2AsyncTaskGetGetRequest($this);
    }
}
