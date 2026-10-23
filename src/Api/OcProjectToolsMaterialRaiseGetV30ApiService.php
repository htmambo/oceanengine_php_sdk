<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_material_raise_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectToolsMaterialRaiseGetV30ApiService
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
     * 获取素材起量调控任务列表
     */
    public function get(): ApiOpenApiV30OcProjectToolsMaterialRaiseGetGetRequest
    {
        return new ApiOpenApiV30OcProjectToolsMaterialRaiseGetGetRequest($this);
    }
}
