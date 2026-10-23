<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_today_live_room_product_list_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanTodayLiveRoomProductListGetV10ApiService
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
     * 获取直播间商品列表
     */
    public function get(): ApiOpenApiV10QianchuanTodayLiveRoomProductListGetGetRequest
    {
        return new ApiOpenApiV10QianchuanTodayLiveRoomProductListGetGetRequest($this);
    }
}
