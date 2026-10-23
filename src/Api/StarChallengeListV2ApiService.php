<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeListV2ApiService
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
     * 获取投稿任务列表
     */
    public function get(): ApiOpenApi2StarChallengeListGetRequest
    {
        return new ApiOpenApi2StarChallengeListGetRequest($this);
    }
}
