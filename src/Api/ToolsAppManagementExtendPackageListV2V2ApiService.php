<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_extend_package_list_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementExtendPackageListV2V2ApiService
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
     * 通过应用包id，查询该应用包相关信息和包含的分包信息。
     */
    public function get(): ApiOpenApi2ToolsAppManagementExtendPackageListV2GetRequest
    {
        return new ApiOpenApi2ToolsAppManagementExtendPackageListV2GetRequest($this);
    }
}
