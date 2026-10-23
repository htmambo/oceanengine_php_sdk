<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_shared_relation_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletSharedRelationCreateV30ApiService
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
     * 传入唯一操作id，关系变更类型，钱包id和账号id，进行共享钱包的绑定/解绑操作
     */
    public function post(): ApiOpenApiV30SharedWalletSharedRelationCreatePostRequest
    {
        return new ApiOpenApiV30SharedWalletSharedRelationCreatePostRequest($this);
    }
}
