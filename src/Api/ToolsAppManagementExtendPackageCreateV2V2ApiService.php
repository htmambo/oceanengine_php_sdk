<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_extend_package_create_v2_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementExtendPackageCreateV2V2ApiService
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
     * 接口描述：创建应用分包【支持所有账户体系】 通过请求参数account_id 账户id（指可以接的账号体系如广告主id、bpid等）
     */
    public function post(): ApiOpenApi2ToolsAppManagementExtendPackageCreateV2PostRequest
    {
        return new ApiOpenApi2ToolsAppManagementExtendPackageCreateV2PostRequest($this);
    }
}
