<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_material_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectMaterialStatusUpdateV30ApiService
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
     * 批量修改全域推广项目下素材状态
     */
    public function post(): ApiOpenApiV30OcProjectMaterialStatusUpdatePostRequest
    {
        return new ApiOpenApiV30OcProjectMaterialStatusUpdatePostRequest($this);
    }
}
