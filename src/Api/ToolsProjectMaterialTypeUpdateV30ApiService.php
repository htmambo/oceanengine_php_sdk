<?php

/**
 * 本文件由 go2php 生成，源: api_tools_project_material_type_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsProjectMaterialTypeUpdateV30ApiService
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
     * 更新标准项目的自选素材开关及素材列表，内部通过服务编排串联标准项目更新逻辑，对照 std_project/update 实现
     */
    public function post(): ApiOpenApiV30ToolsProjectMaterialTypeUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsProjectMaterialTypeUpdatePostRequest($this);
    }
}
