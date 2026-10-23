<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_choose_task_item_with_reward_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeChooseTaskItemWithRewardV2ApiService
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
     * 为客户提供API进行选稿发奖
     */
    public function post(): ApiOpenApi2StarChallengeChooseTaskItemWithRewardPostRequest
    {
        return new ApiOpenApi2StarChallengeChooseTaskItemWithRewardPostRequest($this);
    }
}
