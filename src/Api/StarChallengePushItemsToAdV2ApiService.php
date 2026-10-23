<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_push_items_to_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengePushItemsToAdV2ApiService
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
     * 投稿作品推送AD
     */
    public function post(): ApiOpenApi2StarChallengePushItemsToAdPostRequest
    {
        return new ApiOpenApi2StarChallengePushItemsToAdPostRequest($this);
    }
}
