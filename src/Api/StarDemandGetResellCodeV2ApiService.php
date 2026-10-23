<?php

/**
 * 本文件由 go2php 生成，源: api_star_demand_get_resell_code_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarDemandGetResellCodeV2ApiService
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
     * 客户获取自定义投稿任务分销口令码
     */
    public function get(): ApiOpenApi2StarDemandGetResellCodeGetRequest
    {
        return new ApiOpenApi2StarDemandGetResellCodeGetRequest($this);
    }
}
