<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_order_budget_add_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeOrderBudgetAddV10ApiService
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
     * 可以使用该接口进行投放中订单的续费和续期操作
     */
    public function post(): ApiOpenApiV10QianchuanAwemeOrderBudgetAddPostRequest
    {
        return new ApiOpenApiV10QianchuanAwemeOrderBudgetAddPostRequest($this);
    }
}
