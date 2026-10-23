<?php

/**
 * 本文件由 go2php 生成，源: api_star_provider_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarProviderTaskListV2ApiService
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
     * 服务商星川任务列表
     */
    public function get(): ApiOpenApi2StarProviderTaskListGetRequest
    {
        return new ApiOpenApi2StarProviderTaskListGetRequest($this);
    }
}
