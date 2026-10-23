<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_fund_transfer_seq_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CustomerCenterFundTransferSeqCreateV2ApiService
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
     * API Description
     */
    public function post(): ApiOpenApi2CustomerCenterFundTransferSeqCreatePostRequest
    {
        return new ApiOpenApi2CustomerCenterFundTransferSeqCreatePostRequest($this);
    }
}
