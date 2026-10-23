<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_sync_item_to_ad_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeSyncItemToAdV2ApiService
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
     * 星图视频推送广告通用API
     */
    public function post(): ApiOpenApi2StarChallengeSyncItemToAdPostRequest
    {
        return new ApiOpenApi2StarChallengeSyncItemToAdPostRequest($this);
    }
}
