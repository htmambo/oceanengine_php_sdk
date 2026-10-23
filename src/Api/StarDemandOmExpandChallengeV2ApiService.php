<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_expand_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandOmExpandChallengeV2ApiService
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
     * 小程序投稿任务更新达人范围
     */
    public function post(): ApiOpenApi2StarDemandOmExpandChallengePostRequest
    {
        return new ApiOpenApi2StarDemandOmExpandChallengePostRequest($this);
    }
}
