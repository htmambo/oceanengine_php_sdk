<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_get_custom_task_data_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeGetCustomTaskDataV2ApiService
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
     * 提供一个生态任务数据查询API，便于获取任务数据和投稿数据
     */
    public function get(): ApiOpenApi2StarChallengeGetCustomTaskDataGetRequest
    {
        return new ApiOpenApi2StarChallengeGetCustomTaskDataGetRequest($this);
    }
}
