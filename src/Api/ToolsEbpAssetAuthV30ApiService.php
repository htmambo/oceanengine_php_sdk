<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_asset_auth_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpAssetAuthV30ApiService
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
     * 资产添加授权
     */
    public function post(): ApiOpenApiV30ToolsEbpAssetAuthPostRequest
    {
        return new ApiOpenApiV30ToolsEbpAssetAuthPostRequest($this);
    }
}
