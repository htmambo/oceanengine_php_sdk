<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_sub_wallet_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletSubWalletCreateV30ApiService
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
     * 传入钱包id、钱包名称、大钱包id、共享范围等信息，创建小钱包
     */
    public function post(): ApiOpenApiV30SharedWalletSubWalletCreatePostRequest
    {
        return new ApiOpenApiV30SharedWalletSubWalletCreatePostRequest($this);
    }
}
