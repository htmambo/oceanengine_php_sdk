<?php

/**
 * 本文件由 go2php 生成，源: api_tools_bp_asset_management_share_cancel_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsBpAssetManagementShareCancelV30ApiService
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
     * 取消资产共享
     */
    public function post(): ApiOpenApiV30ToolsBpAssetManagementShareCancelPostRequest
    {
        return new ApiOpenApiV30ToolsBpAssetManagementShareCancelPostRequest($this);
    }
}
