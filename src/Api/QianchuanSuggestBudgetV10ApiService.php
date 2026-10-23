<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_suggest_budget_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanSuggestBudgetV10ApiService
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
     * 推直播间-日常销售-通投-托管-放量投放场景获取建议预算
     */
    public function get(): ApiOpenApiV10QianchuanSuggestBudgetGetRequest
    {
        return new ApiOpenApiV10QianchuanSuggestBudgetGetRequest($this);
    }
}
