<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_wallet_transfer_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferWalletTransferCreateV30ApiService
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
     * 发起转账，支持大钱包与小钱包互转，1:N批量转账
     */
    public function post(): ApiOpenApiV30CgTransferWalletTransferCreatePostRequest
    {
        return new ApiOpenApiV30CgTransferWalletTransferCreatePostRequest($this);
    }
}
