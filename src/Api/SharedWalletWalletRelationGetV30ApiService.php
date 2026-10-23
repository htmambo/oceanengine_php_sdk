<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_wallet_relation_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletWalletRelationGetV30ApiService
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
     * 查询子钱包下绑定的adv列表, 支持分页
     */
    public function get(): ApiOpenApiV30SharedWalletWalletRelationGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletWalletRelationGetGetRequest($this);
    }
}
