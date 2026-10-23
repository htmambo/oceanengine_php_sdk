<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_extend_package_update_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementExtendPackageUpdateV2V2ApiService
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
     * 通过账户id、账户类型和应用包id，更新全部或部分应用子包版本。
     */
    public function post(): ApiOpenApi2ToolsAppManagementExtendPackageUpdateV2PostRequest
    {
        return new ApiOpenApi2ToolsAppManagementExtendPackageUpdateV2PostRequest($this);
    }
}
