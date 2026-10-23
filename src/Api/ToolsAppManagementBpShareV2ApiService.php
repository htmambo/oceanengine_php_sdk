<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_bp_share_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementBpShareV2ApiService
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
     * 设置应用共享【增量共享】 通过请求参数organization_id 巨量纵横组织id、package_id应用包id和share_mode 共享类型 新增应用共享
     */
    public function post(): ApiOpenApi2ToolsAppManagementBpSharePostRequest
    {
        return new ApiOpenApi2ToolsAppManagementBpSharePostRequest($this);
    }
}
