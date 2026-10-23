<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_account_relation_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletAccountRelationGetV30ApiService
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
     * 查询账户对应公司下的钱包关系
     */
    public function get(): ApiOpenApiV30SharedWalletAccountRelationGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletAccountRelationGetGetRequest($this);
    }
}
