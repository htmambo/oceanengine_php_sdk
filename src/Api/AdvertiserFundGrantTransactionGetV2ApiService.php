<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_fund_grant_transaction_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserFundGrantTransactionGetV2ApiService
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
     * 根据广告账户id，时间，流水类型查询赠款流水
     */
    public function get(): ApiOpenApi2AdvertiserFundGrantTransactionGetGetRequest
    {
        return new ApiOpenApi2AdvertiserFundGrantTransactionGetGetRequest($this);
    }
}
