<?php

/**
 * 本文件由 go2php 生成，源: api_subscribe_accounts_remove_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SubscribeAccountsRemoveV30ApiService
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
     * 取消对 Adv 的订阅
     */
    public function post(): ApiOpenApiV30SubscribeAccountsRemovePostRequest
    {
        return new ApiOpenApiV30SubscribeAccountsRemovePostRequest($this);
    }
}
