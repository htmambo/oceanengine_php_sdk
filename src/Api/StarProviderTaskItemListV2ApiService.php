<?php

/**
 * 本文件由 go2php 生成，源: api_star_provider_task_item_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarProviderTaskItemListV2ApiService
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
     * 星川服务商视频列表接口
     */
    public function get(): ApiOpenApi2StarProviderTaskItemListGetRequest
    {
        return new ApiOpenApi2StarProviderTaskItemListGetRequest($this);
    }
}
