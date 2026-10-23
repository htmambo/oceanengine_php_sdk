<?php

/**
 * 本文件由 go2php 生成，源: api_tools_bp_asset_management_share_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsBpAssetManagementShareV30ApiService
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
     * 通用接口，目前支持小游戏、小程序资产
     */
    public function post(): ApiOpenApiV30ToolsBpAssetManagementSharePostRequest
    {
        return new ApiOpenApiV30ToolsBpAssetManagementSharePostRequest($this);
    }
}
