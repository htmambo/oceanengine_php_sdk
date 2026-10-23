<?php

/**
 * 本文件由 go2php 生成，源: api_star_vas_get_boost_group_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarVasGetBoostGroupListV2ApiService
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
     * 拉取加热组列表
     */
    public function get(): ApiOpenApi2StarVasGetBoostGroupListGetRequest
    {
        return new ApiOpenApi2StarVasGetBoostGroupListGetRequest($this);
    }
}
