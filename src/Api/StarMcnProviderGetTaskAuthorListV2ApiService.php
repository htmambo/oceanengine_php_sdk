<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_task_author_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderGetTaskAuthorListV2ApiService
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
     * 星广服务商获取任务下的达人列表
     */
    public function get(): ApiOpenApi2StarMcnProviderGetTaskAuthorListGetRequest
    {
        return new ApiOpenApi2StarMcnProviderGetTaskAuthorListGetRequest($this);
    }
}
