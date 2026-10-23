<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_share_account_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementShareAccountListV2ApiService
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
     * 查询应用共享范围 可通过请求参数organization_id 巨量纵横组织id和package_id应用包id，查询巨量纵横组织下某个应用的共享范围，具体返回信息见返回参数
     */
    public function get(): ApiOpenApi2ToolsAppManagementShareAccountListGetRequest
    {
        return new ApiOpenApi2ToolsAppManagementShareAccountListGetRequest($this);
    }
}
