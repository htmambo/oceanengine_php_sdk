<?php

/**
 * 本文件由 go2php 生成，源: api_agent_adv_cost_report_list_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AgentAdvCostReportListQueryV2ApiService
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
     * 代理商消耗报表查询
     */
    public function post(): ApiOpenApi2AgentAdvCostReportListQueryPostRequest
    {
        return new ApiOpenApi2AgentAdvCostReportListQueryPostRequest($this);
    }
}
