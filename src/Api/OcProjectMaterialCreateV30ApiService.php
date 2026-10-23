<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_material_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectMaterialCreateV30ApiService
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
     * 批量添加智擎版项目下素材
     */
    public function post(): ApiOpenApiV30OcProjectMaterialCreatePostRequest
    {
        return new ApiOpenApiV30OcProjectMaterialCreatePostRequest($this);
    }
}
