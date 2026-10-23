<?php

/**
 * 本文件由 go2php 生成，源: api_query_rebate_balance_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryRebateBalanceV2ApiService
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
     * 结算-查询返点流水信息
     */
    public function get(): ApiOpenApi2QueryRebateBalanceGetRequest
    {
        return new ApiOpenApi2QueryRebateBalanceGetRequest($this);
    }
}
