<?php

/**
 * 本文件由 go2php 生成，源: api_local_budget_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalBudgetUpdateV30ApiService
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
     * 更新账户日预算
     */
    public function post(): ApiOpenApiV30LocalBudgetUpdatePostRequest
    {
        return new ApiOpenApiV30LocalBudgetUpdatePostRequest($this);
    }
}
