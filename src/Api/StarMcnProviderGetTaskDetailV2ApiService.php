<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_task_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderGetTaskDetailV2ApiService
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
     * 获取指定任务详情接口
     */
    public function get(): ApiOpenApi2StarMcnProviderGetTaskDetailGetRequest
    {
        return new ApiOpenApi2StarMcnProviderGetTaskDetailGetRequest($this);
    }
}
