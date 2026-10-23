<?php

/**
 * 本文件由 go2php 生成，源: api_local_advertiser_budget_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalAdvertiserBudgetGetV30ApiService
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
     * 获取账户日预算
     */
    public function get(): ApiOpenApiV30LocalAdvertiserBudgetGetGetRequest
    {
        return new ApiOpenApiV30LocalAdvertiserBudgetGetGetRequest($this);
    }
}
