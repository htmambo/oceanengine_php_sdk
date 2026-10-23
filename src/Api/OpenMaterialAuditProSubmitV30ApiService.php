<?php

/**
 * 本文件由 go2php 生成，源: api_open_material_audit_pro_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OpenMaterialAuditProSubmitV30ApiService
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
     * 广告素材预审提交接口（连山云视频点播版）
     */
    public function post(): ApiOpenApiV30OpenMaterialAuditProSubmitPostRequest
    {
        return new ApiOpenApiV30OpenMaterialAuditProSubmitPostRequest($this);
    }
}
