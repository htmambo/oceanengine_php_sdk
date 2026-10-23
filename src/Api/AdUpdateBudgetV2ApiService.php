<?php

/**
 * 本文件由 go2php 生成，源: api_ad_update_budget_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdUpdateBudgetV2ApiService
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
     * API Description
     */
    public function post(): ApiOpenApi2AdUpdateBudgetPostRequest
    {
        return new ApiOpenApi2AdUpdateBudgetPostRequest($this);
    }
}
