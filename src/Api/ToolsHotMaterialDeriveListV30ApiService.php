<?php

/**
 * 本文件由 go2php 生成，源: api_tools_hot_material_derive_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsHotMaterialDeriveListV30ApiService
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
     * 爆款裂变任务列表
     */
    public function get(): ApiOpenApiV30ToolsHotMaterialDeriveListGetRequest
    {
        return new ApiOpenApiV30ToolsHotMaterialDeriveListGetRequest($this);
    }
}
