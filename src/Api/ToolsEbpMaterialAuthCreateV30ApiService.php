<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_material_auth_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpMaterialAuthCreateV30ApiService
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
     * ebp素材共享
     */
    public function post(): ApiOpenApiV30ToolsEbpMaterialAuthCreatePostRequest
    {
        return new ApiOpenApiV30ToolsEbpMaterialAuthCreatePostRequest($this);
    }
}
