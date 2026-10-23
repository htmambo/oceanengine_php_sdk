<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_author_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeAuthorListV2ApiService
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
     * 获取可投稿达人
     */
    public function get(): ApiOpenApi2StarChallengeAuthorListGetRequest
    {
        return new ApiOpenApi2StarChallengeAuthorListGetRequest($this);
    }
}
