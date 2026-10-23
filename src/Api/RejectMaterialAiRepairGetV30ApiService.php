<?php

/**
 * 本文件由 go2php 生成，源: api_reject_material_ai_repair_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class RejectMaterialAiRepairGetV30ApiService
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
     * 获取拒审素材修复建议
     */
    public function get(): ApiOpenApiV30RejectMaterialAiRepairGetGetRequest
    {
        return new ApiOpenApiV30RejectMaterialAiRepairGetGetRequest($this);
    }
}
