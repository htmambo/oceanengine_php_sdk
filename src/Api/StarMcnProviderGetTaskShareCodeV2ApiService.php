<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_task_share_code_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderGetTaskShareCodeV2ApiService
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
     * 服务商获取任务分享口令码，用于分发任务
     */
    public function get(): ApiOpenApi2StarMcnProviderGetTaskShareCodeGetRequest
    {
        return new ApiOpenApi2StarMcnProviderGetTaskShareCodeGetRequest($this);
    }
}
