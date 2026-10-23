<?php

/**
 * 本文件由 go2php 生成，源: api_tool_quick_app_management_quick_app_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolQuickAppManagementQuickAppGetV2ApiService
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
     * 查询当前广告主的快应用
     */
    public function get(): ApiOpenApi2ToolQuickAppManagementQuickAppGetGetRequest
    {
        return new ApiOpenApi2ToolQuickAppManagementQuickAppGetGetRequest($this);
    }
}
