<?php

/**
 * 本文件由 go2php 生成，源: api_budget_group_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BudgetGroupListV30ApiService
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
     * 筛选预算组列表
     */
    public function get(): ApiOpenApiV30BudgetGroupListGetRequest
    {
        return new ApiOpenApiV30BudgetGroupListGetRequest($this);
    }
}
