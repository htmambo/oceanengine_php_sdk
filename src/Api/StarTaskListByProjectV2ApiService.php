<?php

/**
 * 本文件由 go2php 生成，源: api_star_task_list_by_project_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarTaskListByProjectV2ApiService
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
     * 获取星图项目下任务列表
     */
    public function get(): ApiOpenApi2StarTaskListByProjectGetRequest
    {
        return new ApiOpenApi2StarTaskListByProjectGetRequest($this);
    }
}
