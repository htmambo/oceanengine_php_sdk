<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_promotion_ad_budget_update_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniPromotionAdBudgetUpdateV10ApiService
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
     * 更新全域计划预算
     */
    public function post(): ApiOpenApiV10QianchuanUniPromotionAdBudgetUpdatePostRequest
    {
        return new ApiOpenApiV10QianchuanUniPromotionAdBudgetUpdatePostRequest($this);
    }
}
