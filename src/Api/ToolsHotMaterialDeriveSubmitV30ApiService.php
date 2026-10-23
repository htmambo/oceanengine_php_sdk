<?php

/**
 * 本文件由 go2php 生成，源: api_tools_hot_material_derive_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsHotMaterialDeriveSubmitV30ApiService
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
     * 提交爆款裂变任务
     */
    public function post(): ApiOpenApiV30ToolsHotMaterialDeriveSubmitPostRequest
    {
        return new ApiOpenApiV30ToolsHotMaterialDeriveSubmitPostRequest($this);
    }
}
