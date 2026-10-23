<?php

/**
 * 本文件由 go2php 生成，源: api_star_star_ad_unite_task_item_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarStarAdUniteTaskItemListV2ApiService
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
     * 获取星广联投(星图版)视频维度数据
     */
    public function get(): ApiOpenApi2StarStarAdUniteTaskItemListGetRequest
    {
        return new ApiOpenApi2StarStarAdUniteTaskItemListGetRequest($this);
    }
}
