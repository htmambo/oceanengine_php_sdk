<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_budget_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletBudgetSubmitV30ApiService
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
     * 资金共享-设置子钱包预算信息
     */
    public function post(): ApiOpenApiV30SharedWalletBudgetSubmitPostRequest
    {
        return new ApiOpenApiV30SharedWalletBudgetSubmitPostRequest($this);
    }
}
