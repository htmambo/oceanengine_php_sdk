<?php

/**
 * 本文件由 go2php 生成，源: api_subscribe_accounts_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SubscribeAccountsListV30ApiService
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
     * 查询订阅任务所订阅的 Adv
     */
    public function get(): ApiOpenApiV30SubscribeAccountsListGetRequest
    {
        return new ApiOpenApiV30SubscribeAccountsListGetRequest($this);
    }
}
