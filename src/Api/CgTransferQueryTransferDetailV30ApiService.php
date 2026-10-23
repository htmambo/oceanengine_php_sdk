<?php

/**
 * 本文件由 go2php 生成，源: api_cg_transfer_query_transfer_detail_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CgTransferQueryTransferDetailV30ApiService
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
     * 转账单信息，包括状态、双方账户、转账金额
     */
    public function get(): ApiOpenApiV30CgTransferQueryTransferDetailGetRequest
    {
        return new ApiOpenApiV30CgTransferQueryTransferDetailGetRequest($this);
    }
}
