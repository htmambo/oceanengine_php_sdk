<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_bp_share_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementBpShareCancelV2ApiService
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
     * 取消应用共享 通过请求参数organization_id 巨量纵横组织id、package_id应用包id和share_mode 共享类型 取消应用共享。
     */
    public function post(): ApiOpenApi2ToolsAppManagementBpShareCancelPostRequest
    {
        return new ApiOpenApi2ToolsAppManagementBpShareCancelPostRequest($this);
    }
}
