<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_contact_log_overview_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueContactLogOverviewQueryV2ApiService
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
     * 查询话单概览报表数据
     */
    public function get(): ApiOpenApi2ToolsClueContactLogOverviewQueryGetRequest
    {
        return new ApiOpenApi2ToolsClueContactLogOverviewQueryGetRequest($this);
    }
}
