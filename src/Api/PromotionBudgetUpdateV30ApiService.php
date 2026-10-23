<?php

/**
 * 本文件由 go2php 生成，源: api_promotion_budget_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class PromotionBudgetUpdateV30ApiService
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
     * API Description
     */
    public function post(): ApiOpenApiV30PromotionBudgetUpdatePostRequest
    {
        return new ApiOpenApiV30PromotionBudgetUpdatePostRequest($this);
    }
}
