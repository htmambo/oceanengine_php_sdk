<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_today_live_room_user_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanTodayLiveRoomUserGetV10ApiService
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
     * 获取直播间用户洞察
     */
    public function get(): ApiOpenApiV10QianchuanTodayLiveRoomUserGetGetRequest
    {
        return new ApiOpenApiV10QianchuanTodayLiveRoomUserGetGetRequest($this);
    }
}
