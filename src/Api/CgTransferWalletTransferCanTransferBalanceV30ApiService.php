<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_wallet_transfer_can_transfer_balance_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferWalletTransferCanTransferBalanceV30ApiService
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
     * 支持查询减款方与加款方之间最大可转金额、减款方非品牌最大可转出金额、加款方非品牌最小转入金额
     */
    public function get(): ApiOpenApiV30CgTransferWalletTransferCanTransferBalanceGetRequest
    {
        return new ApiOpenApiV30CgTransferWalletTransferCanTransferBalanceGetRequest($this);
    }
}
