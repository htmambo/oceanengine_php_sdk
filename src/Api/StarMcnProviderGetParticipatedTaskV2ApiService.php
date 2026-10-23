<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_participated_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderGetParticipatedTaskV2ApiService
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
     * 撮合中介-获取已参与任务列表
     */
    public function get(): ApiOpenApi2StarMcnProviderGetParticipatedTaskGetRequest
    {
        return new ApiOpenApi2StarMcnProviderGetParticipatedTaskGetRequest($this);
    }
}
