<?php

/**
 * 本文件由 go2php 生成，源: api_budget_group_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BudgetGroupCreateV30ApiService
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
     * 新建预算组，预算组可设置多个项目的预算（日预算）
     * 注意：一个账户下同时最多存在 200 个有效的预算组，超过请先删除无用预算组
     */
    public function post(): ApiOpenApiV30BudgetGroupCreatePostRequest
    {
        return new ApiOpenApiV30BudgetGroupCreatePostRequest($this);
    }
}
