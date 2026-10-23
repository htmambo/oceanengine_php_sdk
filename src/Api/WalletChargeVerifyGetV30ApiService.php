<?php

/**
 * 本文件由 go2php 生成，源: api_wallet_charge_verify_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class WalletChargeVerifyGetV30ApiService
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
     * 查询钱包账户是否可以充值
     */
    public function get(): ApiOpenApiV30WalletChargeVerifyGetGetRequest
    {
        return new ApiOpenApiV30WalletChargeVerifyGetGetRequest($this);
    }
}
