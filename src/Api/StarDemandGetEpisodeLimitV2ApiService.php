<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_get_episode_limit_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandGetEpisodeLimitV2ApiService
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
     * 获取短剧可剪辑集数配置
     */
    public function get(): ApiOpenApi2StarDemandGetEpisodeLimitGetRequest
    {
        return new ApiOpenApi2StarDemandGetEpisodeLimitGetRequest($this);
    }
}
