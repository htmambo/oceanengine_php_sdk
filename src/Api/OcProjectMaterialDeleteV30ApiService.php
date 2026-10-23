<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_material_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectMaterialDeleteV30ApiService
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
     * 删除全域推广项目下素材
     */
    public function post(): ApiOpenApiV30OcProjectMaterialDeletePostRequest
    {
        return new ApiOpenApiV30OcProjectMaterialDeletePostRequest($this);
    }
}
