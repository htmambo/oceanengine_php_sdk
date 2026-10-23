<?php

/**
 * 本文件由 go2php 生成，源: api_report_live_room_analysis_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportLiveRoomAnalysisGetV30ApiService
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
     * 查询直播间相关数据
     */
    public function get(): ApiOpenApiV30ReportLiveRoomAnalysisGetGetRequest
    {
        return new ApiOpenApiV30ReportLiveRoomAnalysisGetGetRequest($this);
    }
}
