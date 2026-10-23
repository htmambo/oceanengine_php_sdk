<?php

/**
 * 本文件由 go2php 生成，源: api_tools_app_management_app_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAppManagementAppGetV2ApiService
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
     * 查询应用信息 可通过请求参数advertiser_id广告主id 查询广告主下应用列表及应用详细信息，具体返回信息见返回参数
     */
    public function get(): ApiOpenApi2ToolsAppManagementAppGetGetRequest
    {
        return new ApiOpenApi2ToolsAppManagementAppGetGetRequest($this);
    }
}
