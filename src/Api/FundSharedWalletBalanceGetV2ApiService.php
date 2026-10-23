<?php

/**
 * 本文件由 go2php 生成，源: api_fund_shared_wallet_balance_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FundSharedWalletBalanceGetV2ApiService
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
    public function get(): ApiOpenApi2FundSharedWalletBalanceGetGetRequest
    {
        return new ApiOpenApi2FundSharedWalletBalanceGetGetRequest($this);
    }
}
