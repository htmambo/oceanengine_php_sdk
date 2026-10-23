<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_android_basic_package_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementAndroidBasicPackageUpdateV2ApiService
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
     * 创建安卓应用母包「支持所有账户体系】
     */
    public function post(): ApiOpenApi2ToolsAppManagementAndroidBasicPackageUpdatePostRequest
    {
        return new ApiOpenApi2ToolsAppManagementAndroidBasicPackageUpdatePostRequest($this);
    }
}
