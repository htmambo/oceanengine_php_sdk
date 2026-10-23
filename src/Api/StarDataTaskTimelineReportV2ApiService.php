<?php

/**
 * 本文件由 go2php 生成，源: api_star_data_task_timeline_report_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDataTaskTimelineReportV2ApiService
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
     * 获取星图项目/视频转化信息for外部电商
     */
    public function get(): ApiOpenApi2StarDataTaskTimelineReportGetRequest
    {
        return new ApiOpenApi2StarDataTaskTimelineReportGetRequest($this);
    }
}
