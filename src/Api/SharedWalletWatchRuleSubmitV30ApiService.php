<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_watch_rule_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletWatchRuleSubmitV30ApiService
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
     * 资金共享-设置子钱包盯盘预警规则
     */
    public function post(): ApiOpenApiV30SharedWalletWatchRuleSubmitPostRequest
    {
        return new ApiOpenApiV30SharedWalletWatchRuleSubmitPostRequest($this);
    }
}
