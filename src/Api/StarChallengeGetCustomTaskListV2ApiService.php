<?php

/**
 * 本文件由 go2php 生成，源: api_star_challenge_get_custom_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarChallengeGetCustomTaskListV2ApiService
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
     * 提供客户进行自定义结算任务列表查询
     */
    public function get(): ApiOpenApi2StarChallengeGetCustomTaskListGetRequest
    {
        return new ApiOpenApi2StarChallengeGetCustomTaskListGetRequest($this);
    }
}
