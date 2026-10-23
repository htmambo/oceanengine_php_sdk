<?php

/**
 * 本文件由 go2php 生成，源: api_tools_event_all_assets_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEventAllAssetsListV2ApiService
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
     * 包含我创建的资产+被共享的资产，返回结果与AD事件资产列表&详情信息对齐
     */
    public function get(): ApiOpenApi2ToolsEventAllAssetsListGetRequest
    {
        return new ApiOpenApi2ToolsEventAllAssetsListGetRequest($this);
    }
}
