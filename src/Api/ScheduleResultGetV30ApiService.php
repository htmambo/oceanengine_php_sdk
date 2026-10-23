<?php

/**
 * 本文件由 go2php 生成，源: api_schedule_result_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ScheduleResultGetV30ApiService
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
     * 查询任务执行结果
     */
    public function get(): ApiOpenApiV30ScheduleResultGetGetRequest
    {
        return new ApiOpenApiV30ScheduleResultGetGetRequest($this);
    }
}
