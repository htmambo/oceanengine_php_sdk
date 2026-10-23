<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_asset_auth_cancel_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpAssetAuthCancelV30ApiService
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
     * 取消授权
     */
    public function post(): ApiOpenApiV30ToolsEbpAssetAuthCancelPostRequest
    {
        return new ApiOpenApiV30ToolsEbpAssetAuthCancelPostRequest($this);
    }
}
