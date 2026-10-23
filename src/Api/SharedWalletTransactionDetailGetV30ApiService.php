<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_transaction_detail_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletTransactionDetailGetV30ApiService
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
     * 资金共享-查询钱包流水明细
     */
    public function get(): ApiOpenApiV30SharedWalletTransactionDetailGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletTransactionDetailGetGetRequest($this);
    }
}
