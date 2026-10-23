<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletWalletInfoGetV30ApiService
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
     * 批量查询钱包信息
     */
    public function get(): ApiOpenApiV30SharedWalletWalletInfoGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletWalletInfoGetGetRequest($this);
    }
}
