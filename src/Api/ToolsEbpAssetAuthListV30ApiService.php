<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_asset_auth_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpAssetAuthListV30ApiService
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
     * 查询授权范围
     */
    public function get(): ApiOpenApiV30ToolsEbpAssetAuthListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpAssetAuthListGetRequest($this);
    }
}
