<?php

/**
 * 本文件由 go2php 生成，源: api_report_business_platform_stardelivery_task_video_data_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportBusinessPlatformStardeliveryTaskVideoDataGetV30ApiService
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
     * 获取星广短剧素材价值刻画报表
     */
    public function get(): ApiOpenApiV30ReportBusinessPlatformStardeliveryTaskVideoDataGetGetRequest
    {
        return new ApiOpenApiV30ReportBusinessPlatformStardeliveryTaskVideoDataGetGetRequest($this);
    }
}
