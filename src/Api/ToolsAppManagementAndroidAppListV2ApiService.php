<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_android_app_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementAndroidAppListV2ApiService
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
     * 查询账户下安卓应用信息（支持所有账户体系）及应用详细信息
     */
    public function get(): ApiOpenApi2ToolsAppManagementAndroidAppListGetRequest
    {
        return new ApiOpenApi2ToolsAppManagementAndroidAppListGetRequest($this);
    }
}
