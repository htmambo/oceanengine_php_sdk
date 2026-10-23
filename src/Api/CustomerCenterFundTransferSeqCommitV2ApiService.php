<?php

/**
 * 本文件由 go2php 生成，源: api_customer_center_fund_transfer_seq_commit_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CustomerCenterFundTransferSeqCommitV2ApiService
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
    public function post(): ApiOpenApi2CustomerCenterFundTransferSeqCommitPostRequest
    {
        return new ApiOpenApi2CustomerCenterFundTransferSeqCommitPostRequest($this);
    }
}
