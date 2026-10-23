<?php

/**
 * 本文件由 go2php 生成，源: api_advertiser_fund_daily_stat_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AdvertiserFundDailyStatV2ApiService
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
     * 查询账户日流水
     */
    public function get(): ApiOpenApi2AdvertiserFundDailyStatGetRequest
    {
        return new ApiOpenApi2AdvertiserFundDailyStatGetRequest($this);
    }
}
