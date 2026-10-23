<?php

/**
 * 本文件由 go2php 生成，源: api_shared_wallet_daily_stat_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SharedWalletDailyStatGetV30ApiService
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
     * 资金共享-查询共享钱包日流水信息，一般每天8点会出来前一天的数据，如果当天存在数据延迟可往后再尝试。
     */
    public function get(): ApiOpenApiV30SharedWalletDailyStatGetGetRequest
    {
        return new ApiOpenApiV30SharedWalletDailyStatGetGetRequest($this);
    }
}
