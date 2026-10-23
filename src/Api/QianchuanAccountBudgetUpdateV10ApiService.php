<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_account_budget_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAccountBudgetUpdateV10ApiService
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
    public function post(): ApiOpenApiV10QianchuanAccountBudgetUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanAccountBudgetUpdatePostRequest($this);
    }
}
