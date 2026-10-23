<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_today_live_room_flow_performance_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanTodayLiveRoomFlowPerformanceGetV10ApiService
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
     * 获取直播间流量表现
     */
    public function get(): ApiOpenApiV10QianchuanTodayLiveRoomFlowPerformanceGetGetRequest
    {
        return new ApiOpenApiV10QianchuanTodayLiveRoomFlowPerformanceGetGetRequest($this);
    }
}
