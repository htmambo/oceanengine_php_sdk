<?php

/**
 * 本文件由 go2php 生成，源: api_async_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AsyncTaskCreateV2ApiService
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
     * 异步数据报表-创建异步任务
     */
    public function post(): ApiOpenApi2AsyncTaskCreatePostRequest
    {
        return new ApiOpenApi2AsyncTaskCreatePostRequest($this);
    }
}
