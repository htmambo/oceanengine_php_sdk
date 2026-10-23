<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_items_data_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeItemsDataV2ApiService
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
     * 投稿投后数据
     */
    public function get(): ApiOpenApi2StarChallengeItemsDataGetRequest
    {
        return new ApiOpenApi2StarChallengeItemsDataGetRequest($this);
    }
}
