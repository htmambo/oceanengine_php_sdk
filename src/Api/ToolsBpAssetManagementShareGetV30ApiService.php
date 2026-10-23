<?php

/**
 * 本文件由 go2php 生成，源: api_tools_bp_asset_management_share_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsBpAssetManagementShareGetV30ApiService
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
     * 获取资产共享范围
     */
    public function get(): ApiOpenApiV30ToolsBpAssetManagementShareGetGetRequest
    {
        return new ApiOpenApiV30ToolsBpAssetManagementShareGetGetRequest($this);
    }
}
