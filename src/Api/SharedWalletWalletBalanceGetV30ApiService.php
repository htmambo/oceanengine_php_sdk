<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_balance_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletWalletBalanceGetV30ApiService
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
     * 资金共享-批量查询钱包余额
     */
    public function get(): ApiOpenApiV30SharedWalletWalletBalanceGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletWalletBalanceGetGetRequest($this);
    }
}
