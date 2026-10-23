<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeCancelV2ApiService
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
     * 投稿任务取消
     */
    public function post(): ApiOpenApi2StarChallengeCancelPostRequest
    {
        return new ApiOpenApi2StarChallengeCancelPostRequest($this);
    }
}
