<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_material_raise_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectToolsMaterialRaiseCreateV30ApiService
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
     * 创建素材起量调控任务
     */
    public function post(): ApiOpenApiV30OcProjectToolsMaterialRaiseCreatePostRequest
    {
        return new ApiOpenApiV30OcProjectToolsMaterialRaiseCreatePostRequest($this);
    }
}
