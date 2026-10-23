<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_uni_promotion_order_budget_add_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeUniPromotionOrderBudgetAddV10ApiService
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
     * 追加随心推全域订单预算
     */
    public function post(): ApiOpenApiV10QianchuanAwemeUniPromotionOrderBudgetAddPostRequest
    {
        return new ApiOpenApiV10QianchuanAwemeUniPromotionOrderBudgetAddPostRequest($this);
    }
}
