<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_uni_aweme_suggest_budget_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanUniAwemeSuggestBudgetV10ApiService
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
     * 获取全域建议预算
     */
    public function get(): ApiOpenApiV10QianchuanUniAwemeSuggestBudgetGetRequest
    {
        return new ApiOpenApiV10QianchuanUniAwemeSuggestBudgetGetRequest($this);
    }
}
