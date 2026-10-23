<?php

/**
 * 本文件由 go2php 生成，源: api_open_material_audit_pro_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OpenMaterialAuditProGetV30ApiService
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
     * 广告素材预审结果查询（连山云视频点播版）
     */
    public function get(): ApiOpenApiV30OpenMaterialAuditProGetGetRequest
    {
        return new ApiOpenApiV30OpenMaterialAuditProGetGetRequest($this);
    }
}
