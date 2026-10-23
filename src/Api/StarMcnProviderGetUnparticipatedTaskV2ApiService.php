<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_unparticipated_task_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderGetUnparticipatedTaskV2ApiService
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
     * 撮合中介-获取可接取任务列表
     */
    public function get(): ApiOpenApi2StarMcnProviderGetUnparticipatedTaskGetRequest
    {
        return new ApiOpenApi2StarMcnProviderGetUnparticipatedTaskGetRequest($this);
    }
}
