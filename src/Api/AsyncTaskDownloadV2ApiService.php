<?php

/**
 * 本文件由 go2php 生成，源: api_async_task_download_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AsyncTaskDownloadV2ApiService
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
     * 异步数据报表-下载任务结果
     */
    public function get(): ApiOpenApi2AsyncTaskDownloadGetRequest
    {
        return new ApiOpenApi2AsyncTaskDownloadGetRequest($this);
    }
}
