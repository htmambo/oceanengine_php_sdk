<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_today_live_room_data_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportTodayLiveRoomDataGetV10ApiService
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
     * 获取直播大屏数据
     */
    public function get(): ApiOpenApiV10QianchuanReportTodayLiveRoomDataGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportTodayLiveRoomDataGetGetRequest($this);
    }
}
