<?php

/**
 * 本文件由 go2php 生成，源: api_tools_material_raise_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMaterialRaiseGetV30ApiService
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
     * 获取素材起量方案列表
     */
    public function get(): ApiOpenApiV30ToolsMaterialRaiseGetGetRequest
    {
        return new ApiOpenApiV30ToolsMaterialRaiseGetGetRequest($this);
    }
}
