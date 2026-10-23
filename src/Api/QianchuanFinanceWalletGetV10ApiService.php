<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_finance_wallet_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanFinanceWalletGetV10ApiService
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
     * 通过此接口，用户可以获取账户钱包内余额信息
     */
    public function get(): ApiOpenApiV10QianchuanFinanceWalletGetGetRequest
    {
        return new ApiOpenApiV10QianchuanFinanceWalletGetGetRequest($this);
    }
}
