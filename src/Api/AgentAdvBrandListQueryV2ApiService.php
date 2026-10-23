<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_brand_list_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvBrandListQueryV2ApiService
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
     * 代理商品牌投放数据
     */
    public function get(): ApiOpenApi2AgentAdvBrandListQueryGetRequest
    {
        return new ApiOpenApi2AgentAdvBrandListQueryGetRequest($this);
    }
}
