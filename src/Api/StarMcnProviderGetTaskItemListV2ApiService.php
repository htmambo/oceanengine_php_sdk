<?php

/**
 * 本文件由 go2php 生成，源: api_star_mcn_provider_get_task_item_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarMcnProviderGetTaskItemListV2ApiService
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
     * 获取投后数据信息
     */
    public function get(): ApiOpenApi2StarMcnProviderGetTaskItemListGetRequest
    {
        return new ApiOpenApi2StarMcnProviderGetTaskItemListGetRequest($this);
    }
}
