<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_watch_rule_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletWatchRuleGetV30ApiService
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
     * 资金共享-共享钱包盯盘规则查询(支持查询预警级别、阈值及级别对应的预警事件)
     */
    public function get(): ApiOpenApiV30SharedWalletWatchRuleGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletWatchRuleGetGetRequest($this);
    }
}
