<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_material_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpMaterialListV30ApiService
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
     * 支持按 ebp_id 查询该组织下的素材 mid 列表；查询条件与返回字段与现有 adv 维度素材列表接口对齐
     */
    public function get(): ApiOpenApiV30ToolsEbpMaterialListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpMaterialListGetRequest($this);
    }
}
