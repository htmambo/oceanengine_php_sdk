<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_get_boost_item_group_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarVasGetBoostItemGroupDetailV2ApiService
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
     * 获取投中加热组详情
     */
    public function get(): ApiOpenApi2StarVasGetBoostItemGroupDetailGetRequest
    {
        return new ApiOpenApi2StarVasGetBoostItemGroupDetailGetRequest($this);
    }
}
