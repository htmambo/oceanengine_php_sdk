<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_today_live_room_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanTodayLiveRoomGetV10ApiService
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
     * 获取直播列表
     */
    public function get(): ApiOpenApiV10QianchuanTodayLiveRoomGetGetRequest
    {
        return new ApiOpenApiV10QianchuanTodayLiveRoomGetGetRequest($this);
    }
}
