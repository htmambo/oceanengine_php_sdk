<?php

/**
 * 本文件由 go2php 生成，源: api_reject_material_ai_repair_cross_account_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class RejectMaterialAiRepairCrossAccountGetV30ApiService
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
     * 根据mid查询同主体账户下修复建议列表
     */
    public function get(): ApiOpenApiV30RejectMaterialAiRepairCrossAccountGetGetRequest
    {
        return new ApiOpenApiV30RejectMaterialAiRepairCrossAccountGetGetRequest($this);
    }
}
