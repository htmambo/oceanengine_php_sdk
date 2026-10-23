<?php

/**
 * 本文件由 go2php 生成，源: api_agent_company_bidding_list_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentCompanyBiddingListQueryV2ApiService
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
     * 代理商竞价投放数据-公司维度
     */
    public function get(): ApiOpenApi2AgentCompanyBiddingListQueryGetRequest
    {
        return new ApiOpenApi2AgentCompanyBiddingListQueryGetRequest($this);
    }
}
