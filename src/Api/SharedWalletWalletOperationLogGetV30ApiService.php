<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_operation_log_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletWalletOperationLogGetV30ApiService
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
     * 查询钱包粒度操作记录
     */
    public function get(): ApiOpenApiV30SharedWalletWalletOperationLogGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletWalletOperationLogGetGetRequest($this);
    }
}
