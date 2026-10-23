<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_budget_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserBudgetGetV2ApiService
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
     * 此接口可以更新广告主账号设置的预算类型与预算
     */
    public function get(): ApiOpenApi2AdvertiserBudgetGetGetRequest
    {
        return new ApiOpenApi2AdvertiserBudgetGetGetRequest($this);
    }
}
