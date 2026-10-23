<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_adv_operation_log_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletWalletAdvOperationLogGetV30ApiService
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
     * 查询ADV粒度的共享钱包操作记录
     */
    public function get(): ApiOpenApiV30SharedWalletWalletAdvOperationLogGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletWalletAdvOperationLogGetGetRequest($this);
    }
}
