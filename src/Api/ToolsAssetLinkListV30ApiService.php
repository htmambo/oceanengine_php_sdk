<?php

/**
 * 本文件由 go2php 生成，源: api_tools_asset_link_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAssetLinkListV30ApiService
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
     * mapi场景获取字节小程序小游戏链接
     */
    public function get(): ApiOpenApiV30ToolsAssetLinkListGetRequest
    {
        return new ApiOpenApiV30ToolsAssetLinkListGetRequest($this);
    }
}
