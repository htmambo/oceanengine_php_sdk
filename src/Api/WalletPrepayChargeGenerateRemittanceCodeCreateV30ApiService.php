<?php

/**
 * 本文件由 go2php 生成，源: api_wallet_prepay_charge_generate_remittance_code_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class WalletPrepayChargeGenerateRemittanceCodeCreateV30ApiService
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
     * 钱包充值并获取汇款码
     */
    public function post(): ApiOpenApiV30WalletPrepayChargeGenerateRemittanceCodeCreatePostRequest
    {
        return new ApiOpenApiV30WalletPrepayChargeGenerateRemittanceCodeCreatePostRequest($this);
    }
}
