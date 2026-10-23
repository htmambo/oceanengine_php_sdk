<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_get_push_ad_results_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeGetPushAdResultsV2ApiService
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
     * 查询投稿任务广告推送结果
     */
    public function get(): ApiOpenApi2StarChallengeGetPushAdResultsGetRequest
    {
        return new ApiOpenApi2StarChallengeGetPushAdResultsGetRequest($this);
    }
}
