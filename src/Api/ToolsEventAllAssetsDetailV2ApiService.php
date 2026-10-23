<?php

/**
 * 本文件由 go2php 生成，源: api_tools_event_all_assets_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEventAllAssetsDetailV2ApiService
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
     * 仅支持查询我创建的+共享中状态、未删除的资产详情，共享失败不支持查询
     */
    public function get(): ApiOpenApi2ToolsEventAllAssetsDetailGetRequest
    {
        return new ApiOpenApi2ToolsEventAllAssetsDetailGetRequest($this);
    }
}
