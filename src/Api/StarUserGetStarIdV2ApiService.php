<?php

/**
 * 本文件由 go2php 生成，源: api_star_user_get_star_id_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarUserGetStarIdV2ApiService
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
     * 用于抖音uid回查星图uid
     */
    public function get(): ApiOpenApi2StarUserGetStarIdGetRequest
    {
        return new ApiOpenApi2StarUserGetStarIdGetRequest($this);
    }
}
