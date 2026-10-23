<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_update_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandOmUpdateChallengeV2ApiService
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
     * 小程序投稿任务更新
     */
    public function post(): ApiOpenApi2StarDemandOmUpdateChallengePostRequest
    {
        return new ApiOpenApi2StarDemandOmUpdateChallengePostRequest($this);
    }
}
