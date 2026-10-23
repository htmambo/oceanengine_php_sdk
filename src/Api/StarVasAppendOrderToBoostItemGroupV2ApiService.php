<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_append_order_to_boost_item_group_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarVasAppendOrderToBoostItemGroupV2ApiService
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
     * 投中加热组追加金额或指派单
     */
    public function post(): ApiOpenApi2StarVasAppendOrderToBoostItemGroupPostRequest
    {
        return new ApiOpenApi2StarVasAppendOrderToBoostItemGroupPostRequest($this);
    }
}
