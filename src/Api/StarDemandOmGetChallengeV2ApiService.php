<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_get_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandOmGetChallengeV2ApiService
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
     * 小程序查询任务详情
     */
    public function get(): ApiOpenApi2StarDemandOmGetChallengeGetRequest
    {
        return new ApiOpenApi2StarDemandOmGetChallengeGetRequest($this);
    }
}
