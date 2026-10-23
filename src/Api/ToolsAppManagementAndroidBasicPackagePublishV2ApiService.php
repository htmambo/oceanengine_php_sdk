<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_android_basic_package_publish_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementAndroidBasicPackagePublishV2ApiService
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
     * 发布安卓应用母包「支持所有账户体系】 可通过请求参数account_id 账户id（指可以接的账号体系如广告主id、巨量纵横组织id等）和account_type 账户类型，发布审核通过的安卓应用母包。
     */
    public function post(): ApiOpenApi2ToolsAppManagementAndroidBasicPackagePublishPostRequest
    {
        return new ApiOpenApi2ToolsAppManagementAndroidBasicPackagePublishPostRequest($this);
    }
}
