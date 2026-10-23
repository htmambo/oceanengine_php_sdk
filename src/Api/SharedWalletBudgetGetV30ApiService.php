<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_budget_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletBudgetGetV30ApiService
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
     * 资金共享-查询子钱包预算信息
     */
    public function get(): ApiOpenApiV30SharedWalletBudgetGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletBudgetGetGetRequest($this);
    }
}
