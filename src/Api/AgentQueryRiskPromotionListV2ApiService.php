<?php

/**
 * 本文件由 go2php 生成，源: api_agent_query_risk_promotion_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentQueryRiskPromotionListV2ApiService
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
     * 查询违规广告列表
     */
    public function get(): ApiOpenApi2AgentQueryRiskPromotionListGetRequest
    {
        return new ApiOpenApi2AgentQueryRiskPromotionListGetRequest($this);
    }
}
