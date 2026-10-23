<?php

/**
 * 本文件由 go2php 生成，源: api_report_stardelivery_task_video_data_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportStardeliveryTaskVideoDataGetV30ApiService
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
     * 会返回所有产生了投后数据的视频数据
     */
    public function get(): ApiOpenApiV30ReportStardeliveryTaskVideoDataGetGetRequest
    {
        return new ApiOpenApiV30ReportStardeliveryTaskVideoDataGetGetRequest($this);
    }
}
