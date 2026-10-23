<?php

/**
 * 本文件由 go2php 生成，源: api_agent_company_brand_list_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentCompanyBrandListQueryV2ApiService
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
     * 代理商品牌投放数据-公司维度
     */
    public function get(): ApiOpenApi2AgentCompanyBrandListQueryGetRequest
    {
        return new ApiOpenApi2AgentCompanyBrandListQueryGetRequest($this);
    }
}
