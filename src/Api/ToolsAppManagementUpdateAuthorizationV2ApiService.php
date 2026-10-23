<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_update_authorization_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementUpdateAuthorizationV2ApiService
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
     * 增加和删除ad应用资产的共享关系
     */
    public function post(): ApiOpenApi2ToolsAppManagementUpdateAuthorizationPostRequest
    {
        return new ApiOpenApi2ToolsAppManagementUpdateAuthorizationPostRequest($this);
    }
}
