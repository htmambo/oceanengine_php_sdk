<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aigc_material_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAigcMaterialGetV2ApiService
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
     * 获取推荐AIGC素材
     */
    public function get(): ApiOpenApi2ToolsAigcMaterialGetGetRequest
    {
        return new ApiOpenApi2ToolsAigcMaterialGetGetRequest($this);
    }
}
