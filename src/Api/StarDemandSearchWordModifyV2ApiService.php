<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_search_word_modify_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandSearchWordModifyV2ApiService
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
     * 修改任务搜索词
     */
    public function post(): ApiOpenApi2StarDemandSearchWordModifyPostRequest
    {
        return new ApiOpenApi2StarDemandSearchWordModifyPostRequest($this);
    }
}
