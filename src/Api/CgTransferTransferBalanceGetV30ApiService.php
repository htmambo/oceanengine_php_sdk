<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_transfer_balance_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferTransferBalanceGetV30ApiService
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
     * 查询账户自身转账余额、作为转出方需要预留的竞价消耗保证金
     */
    public function get(): ApiOpenApiV30CgTransferTransferBalanceGetGetRequest
    {
        return new ApiOpenApiV30CgTransferTransferBalanceGetGetRequest($this);
    }
}
