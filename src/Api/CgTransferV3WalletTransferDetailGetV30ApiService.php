<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_v3_wallet_transfer_detail_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferV3WalletTransferDetailGetV30ApiService
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
     * 查询单个转账单信息
     */
    public function get(): ApiOpenApiV30CgTransferV3WalletTransferDetailGetGetRequest
    {
        return new ApiOpenApiV30CgTransferV3WalletTransferDetailGetGetRequest($this);
    }
}
