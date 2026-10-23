<?php

/**
 * 本文件由 go2php 生成，源: api_report_agent_get_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportAgentGetV2V2ApiService
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
     * API Description
     */
    public function get(): ApiOpenApi2ReportAgentGetV2GetRequest
    {
        return new ApiOpenApi2ReportAgentGetV2GetRequest($this);
    }
}
