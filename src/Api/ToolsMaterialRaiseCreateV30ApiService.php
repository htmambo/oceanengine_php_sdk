<?php

/**
 * 本文件由 go2php 生成，源: api_tools_material_raise_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMaterialRaiseCreateV30ApiService
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
     * 开启素材起量
     */
    public function post(): ApiOpenApiV30ToolsMaterialRaiseCreatePostRequest
    {
        return new ApiOpenApiV30ToolsMaterialRaiseCreatePostRequest($this);
    }
}
