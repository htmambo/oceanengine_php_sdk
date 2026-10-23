<?php

/**
 * 本文件由 go2php 生成，源: api_security_open_material_audit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SecurityOpenMaterialAuditV30ApiService
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
     * 与大盘素材使用相同规则进行素材预审
     */
    public function post(): ApiOpenApiV30SecurityOpenMaterialAuditPostRequest
    {
        return new ApiOpenApiV30SecurityOpenMaterialAuditPostRequest($this);
    }
}
