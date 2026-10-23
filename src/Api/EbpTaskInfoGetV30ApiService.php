<?php

/**
 * 本文件由 go2php 生成，源: api_ebp_task_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class EbpTaskInfoGetV30ApiService
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
     * 查看异步任务执行进度/结果
     */
    public function get(): ApiOpenApiV30EbpTaskInfoGetGetRequest
    {
        return new ApiOpenApiV30EbpTaskInfoGetGetRequest($this);
    }
}
