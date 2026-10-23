<?php

/**
 * 本文件由 go2php 生成，源: api_wallet_remittance_code_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class WalletRemittanceCodeListGetV30ApiService
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
     * 钱包账户查询汇款码列表
     */
    public function get(): ApiOpenApiV30WalletRemittanceCodeListGetGetRequest
    {
        return new ApiOpenApiV30WalletRemittanceCodeListGetGetRequest($this);
    }
}
