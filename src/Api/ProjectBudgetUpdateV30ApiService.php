<?php

/**
 * 本文件由 go2php 生成，源: api_project_budget_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectBudgetUpdateV30ApiService
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
     * 创编2.0批量更新项目预算
     */
    public function post(): ApiOpenApiV30ProjectBudgetUpdatePostRequest
    {
        return new ApiOpenApiV30ProjectBudgetUpdatePostRequest($this);
    }
}
