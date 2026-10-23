<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_create_boost_item_group_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarVasCreateBoostItemGroupV2ApiService
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
     * 投中加热组下单
     */
    public function post(): ApiOpenApi2StarVasCreateBoostItemGroupPostRequest
    {
        return new ApiOpenApi2StarVasCreateBoostItemGroupPostRequest($this);
    }
}
