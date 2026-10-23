<?php

/**
 * 本文件由 go2php 生成，源: api_project_schedule_time_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectScheduleTimeUpdateV30ApiService
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
     * 批量更新项目投放时间
     */
    public function post(): ApiOpenApiV30ProjectScheduleTimeUpdatePostRequest
    {
        return new ApiOpenApiV30ProjectScheduleTimeUpdatePostRequest($this);
    }
}
