<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_extend_package_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementExtendPackageCreateV2ApiService
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
     * APIDescription
     */
    public function post(): ApiOpenApi2ToolsAppManagementExtendPackageCreatePostRequest
    {
        return new ApiOpenApi2ToolsAppManagementExtendPackageCreatePostRequest($this);
    }
}
