<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_going_global_budget_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserGoingGlobalBudgetUpdateV2ApiService
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
     * 更新账户出海日预算
     */
    public function post(): ApiOpenApi2AdvertiserGoingGlobalBudgetUpdatePostRequest
    {
        return new ApiOpenApi2AdvertiserGoingGlobalBudgetUpdatePostRequest($this);
    }
}
