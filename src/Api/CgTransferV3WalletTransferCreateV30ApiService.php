<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_v3_wallet_transfer_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferV3WalletTransferCreateV30ApiService
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
     * 发起转账，支持钱包<->钱包之间m:n转账，但一次转账一个钱包id不能既是减款方，也是加款方
     */
    public function post(): ApiOpenApiV30CgTransferV3WalletTransferCreatePostRequest
    {
        return new ApiOpenApiV30CgTransferV3WalletTransferCreatePostRequest($this);
    }
}
