<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_main_wallet_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletMainWalletGetV30ApiService
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
     * 查询当前共享钱包(大钱包)的信息
     */
    public function get(): ApiOpenApiV30SharedWalletMainWalletGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletMainWalletGetGetRequest($this);
    }
}
