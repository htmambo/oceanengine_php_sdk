<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_today_live_v2_room_user_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanTodayLiveV2RoomUserGetV10ApiService
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
     * 获取直播间用户洞察v2
     */
    public function get(): ApiOpenApiV10QianchuanTodayLiveV2RoomUserGetGetRequest
    {
        return new ApiOpenApiV10QianchuanTodayLiveV2RoomUserGetGetRequest($this);
    }
}
