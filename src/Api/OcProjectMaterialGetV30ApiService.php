<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_material_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectMaterialGetV30ApiService
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
     * 获取投放项目下素材
     */
    public function get(): ApiOpenApiV30OcProjectMaterialGetGetRequest
    {
        return new ApiOpenApiV30OcProjectMaterialGetGetRequest($this);
    }
}
