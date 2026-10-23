<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_create_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandCreateChallengeV2ApiService
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
     * 投稿任务创建
     */
    public function post(): ApiOpenApi2StarDemandCreateChallengePostRequest
    {
        return new ApiOpenApi2StarDemandCreateChallengePostRequest($this);
    }
}
