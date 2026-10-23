<?php

/**
 * 本文件由 go2php 生成，源: api_near_realtime_cost_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class NearRealtimeCostGetV30ApiService
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
     * 查询账户区分资金来源的准实时消耗，在投放期内的预估花费金额。当天数据可能会有波动，次日9点后稳定
     */
    public function get(): ApiOpenApiV30NearRealtimeCostGetGetRequest
    {
        return new ApiOpenApiV30NearRealtimeCostGetGetRequest($this);
    }
}
