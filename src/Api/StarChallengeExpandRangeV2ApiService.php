<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_expand_range_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeExpandRangeV2ApiService
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
     * 增加达人范围
     */
    public function post(): ApiOpenApi2StarChallengeExpandRangePostRequest
    {
        return new ApiOpenApi2StarChallengeExpandRangePostRequest($this);
    }
}
