<?php

/**
 * 本文件由 go2php 生成，源: api_star_task_bind_project_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarTaskBindProjectV2ApiService
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
     * 绑定任务至项目
     */
    public function post(): ApiOpenApi2StarTaskBindProjectPostRequest
    {
        return new ApiOpenApi2StarTaskBindProjectPostRequest($this);
    }
}
