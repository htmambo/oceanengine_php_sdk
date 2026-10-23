<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_going_global_budget_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserGoingGlobalBudgetGetV2ApiService
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
     * 获取账户出海日预算
     */
    public function get(): ApiOpenApi2AdvertiserGoingGlobalBudgetGetGetRequest
    {
        return new ApiOpenApi2AdvertiserGoingGlobalBudgetGetGetRequest($this);
    }
}
