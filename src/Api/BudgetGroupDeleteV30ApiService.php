<?php

/**
 * 本文件由 go2php 生成，源: api_budget_group_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BudgetGroupDeleteV30ApiService
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
     * 删除预算组，删除后关联的项目不受影响，继续以项目预算进行推广
     * - 预算组删除后不可恢复、不可见
     * - 预算组内无项目、项目均为已删除时，才支持删除预算组
     */
    public function post(): ApiOpenApiV30BudgetGroupDeletePostRequest
    {
        return new ApiOpenApiV30BudgetGroupDeletePostRequest($this);
    }
}
