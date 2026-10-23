<?php

/**
 * 本文件由 go2php 生成，源: api_report_stardelivery_task_data_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportStardeliveryTaskDataGetV30ApiService
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
     * 获取星广联投任务数据
     */
    public function get(): ApiOpenApiV30ReportStardeliveryTaskDataGetGetRequest
    {
        return new ApiOpenApiV30ReportStardeliveryTaskDataGetGetRequest($this);
    }
}
