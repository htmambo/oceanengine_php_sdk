<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_harmony_app_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementHarmonyAppListV2ApiService
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
     * 查询鸿蒙应用列表
     */
    public function get(): ApiOpenApi2ToolsAppManagementHarmonyAppListGetRequest
    {
        return new ApiOpenApi2ToolsAppManagementHarmonyAppListGetRequest($this);
    }
}
