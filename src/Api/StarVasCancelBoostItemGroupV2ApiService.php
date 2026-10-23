<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_cancel_boost_item_group_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarVasCancelBoostItemGroupV2ApiService
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
     * 取消投中加热组
     */
    public function post(): ApiOpenApi2StarVasCancelBoostItemGroupPostRequest
    {
        return new ApiOpenApi2StarVasCancelBoostItemGroupPostRequest($this);
    }
}
