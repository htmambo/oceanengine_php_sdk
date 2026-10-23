<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_ebp_relation_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletWalletEbpRelationGetV30ApiService
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
     * 查询组织下开通的钱包列表，支持大钱包、备款钱包、投放钱包、代理给客户授权的钱包
     */
    public function get(): ApiOpenApiV30SharedWalletWalletEbpRelationGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletWalletEbpRelationGetGetRequest($this);
    }
}
