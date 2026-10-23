<?php

/**
 * 本文件由 go2php 生成，源: api_budget_group_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BudgetGroupUpdateV30ApiService
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
     * 更新预算组名称和日预算
     * 注意：
     * 1. 名称不能跟未删除的预算组重名
     * 2. 预算不得低于关联的项目、广告出价，不得低于已有消耗
     * 2. 一天最多更新 20 次
     */
    public function post(): ApiOpenApiV30BudgetGroupUpdatePostRequest
    {
        return new ApiOpenApiV30BudgetGroupUpdatePostRequest($this);
    }
}
