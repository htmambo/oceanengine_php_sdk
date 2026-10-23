<?php

/**
 * 本文件由 go2php 生成，源: api_query_rebate_accounting_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryRebateAccountingInfoV2ApiService
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
     * 结算-查询返点核算信息
     */
    public function get(): ApiOpenApi2QueryRebateAccountingInfoGetRequest
    {
        return new ApiOpenApi2QueryRebateAccountingInfoGetRequest($this);
    }
}
