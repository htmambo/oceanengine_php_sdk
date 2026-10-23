<?php

/**
 * 本文件由 go2php 生成，源: api_tools_log_search_detail_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsLogSearchDetailGetV2ApiService
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
     * 获取操作日志详情
     */
    public function get(): ApiOpenApi2ToolsLogSearchDetailGetGetRequest
    {
        return new ApiOpenApi2ToolsLogSearchDetailGetGetRequest($this);
    }
}
