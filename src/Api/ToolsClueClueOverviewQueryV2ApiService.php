<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_clue_overview_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueClueOverviewQueryV2ApiService
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
     * 查询线索概览报表数据
     */
    public function get(): ApiOpenApi2ToolsClueClueOverviewQueryGetRequest
    {
        return new ApiOpenApi2ToolsClueClueOverviewQueryGetRequest($this);
    }
}
