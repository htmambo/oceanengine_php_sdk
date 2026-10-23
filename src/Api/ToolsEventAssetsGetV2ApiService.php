<?php

/**
 * 本文件由 go2php 生成，源: api_tools_event_assets_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEventAssetsGetV2ApiService
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
     * >查询广告主拥有的资产信息
     */
    public function get(): ApiOpenApi2ToolsEventAssetsGetGetRequest
    {
        return new ApiOpenApi2ToolsEventAssetsGetGetRequest($this);
    }
}
