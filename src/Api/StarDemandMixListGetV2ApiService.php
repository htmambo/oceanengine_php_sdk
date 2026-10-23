<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_mix_list_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandMixListGetV2ApiService
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
     * 客户侧获取漫剧任务下，剧集维度投后数据。
     */
    public function get(): ApiOpenApi2StarDemandMixListGetGetRequest
    {
        return new ApiOpenApi2StarDemandMixListGetGetRequest($this);
    }
}
