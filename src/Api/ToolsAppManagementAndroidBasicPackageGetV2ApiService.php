<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_android_basic_package_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementAndroidBasicPackageGetV2ApiService
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
     * 查询安卓应用母包信息
     */
    public function get(): ApiOpenApi2ToolsAppManagementAndroidBasicPackageGetGetRequest
    {
        return new ApiOpenApi2ToolsAppManagementAndroidBasicPackageGetGetRequest($this);
    }
}
