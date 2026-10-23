<?php

/**
 * 本文件由 go2php 生成，源: api_report_report_live_room_audience_portrait_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportReportLiveRoomAudiencePortraitGetV30ApiService
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
     * 直播间受众分析报表
     */
    public function get(): ApiOpenApiV30ReportReportLiveRoomAudiencePortraitGetGetRequest
    {
        return new ApiOpenApiV30ReportReportLiveRoomAudiencePortraitGetGetRequest($this);
    }
}
