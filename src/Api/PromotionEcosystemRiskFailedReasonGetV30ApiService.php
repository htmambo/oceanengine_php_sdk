<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_ecosystem_risk_failed_reason_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionEcosystemRiskFailedReasonGetV30ApiService
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
     * 获取单元下素材生态风险判定建议
     */
    public function get(): ApiOpenApiV30PromotionEcosystemRiskFailedReasonGetGetRequest
    {
        return new ApiOpenApiV30PromotionEcosystemRiskFailedReasonGetGetRequest($this);
    }
}
