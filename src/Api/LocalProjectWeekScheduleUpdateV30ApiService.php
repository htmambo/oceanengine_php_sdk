<?php

/**
 * 本文件由 go2php 生成，源: api_local_project_week_schedule_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalProjectWeekScheduleUpdateV30ApiService
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
     * 列表批量更新项目投放时段
     */
    public function post(): ApiOpenApiV30LocalProjectWeekScheduleUpdatePostRequest
    {
        return new ApiOpenApiV30LocalProjectWeekScheduleUpdatePostRequest($this);
    }
}
