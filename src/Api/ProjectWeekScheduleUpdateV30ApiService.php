<?php

/**
 * 本文件由 go2php 生成，源: api_project_week_schedule_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectWeekScheduleUpdateV30ApiService
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
     * 批量更新项目投放时段
     */
    public function post(): ApiOpenApiV30ProjectWeekScheduleUpdatePostRequest
    {
        return new ApiOpenApiV30ProjectWeekScheduleUpdatePostRequest($this);
    }
}
