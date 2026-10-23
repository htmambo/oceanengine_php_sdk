<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_om_create_challenge_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandOmCreateChallengeV2ApiService
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
     * 小程序投稿任务创建
     */
    public function post(): ApiOpenApi2StarDemandOmCreateChallengePostRequest
    {
        return new ApiOpenApi2StarDemandOmCreateChallengePostRequest($this);
    }
}
