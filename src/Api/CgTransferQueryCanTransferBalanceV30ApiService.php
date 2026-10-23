<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_query_can_transfer_balance_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferQueryCanTransferBalanceV30ApiService
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
     * 查询减款方与加款方之间最大可转金额，接口内已自动扣除需要预留的竞价消耗保证金，支持查询1:N转账的最大可转金额
     */
    public function get(): ApiOpenApiV30CgTransferQueryCanTransferBalanceGetRequest
    {
        return new ApiOpenApiV30CgTransferQueryCanTransferBalanceGetRequest($this);
    }
}
