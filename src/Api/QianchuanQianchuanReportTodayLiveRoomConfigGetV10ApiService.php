<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_qianchuan_report_today_live_room_config_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanQianchuanReportTodayLiveRoomConfigGetV10ApiService
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
     * 获取直播大屏可用指标和维度
     */
    public function get(): ApiOpenApiV10QianchuanQianchuanReportTodayLiveRoomConfigGetGetRequest
    {
        return new ApiOpenApiV10QianchuanQianchuanReportTodayLiveRoomConfigGetGetRequest($this);
    }
}
