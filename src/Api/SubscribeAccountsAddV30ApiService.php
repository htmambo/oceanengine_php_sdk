<?php

/**
 * 本文件由 go2php 生成，源: api_subscribe_accounts_add_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SubscribeAccountsAddV30ApiService
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
     * 增加对 Adv 的订阅
     */
    public function post(): ApiOpenApiV30SubscribeAccountsAddPostRequest
    {
        return new ApiOpenApiV30SubscribeAccountsAddPostRequest($this);
    }
}
