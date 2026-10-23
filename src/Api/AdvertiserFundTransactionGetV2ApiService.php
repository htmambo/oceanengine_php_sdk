<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_fund_transaction_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserFundTransactionGetV2ApiService
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
     * 查询账号流水明细
     */
    public function get(): ApiOpenApi2AdvertiserFundTransactionGetGetRequest
    {
        return new ApiOpenApi2AdvertiserFundTransactionGetGetRequest($this);
    }
}
