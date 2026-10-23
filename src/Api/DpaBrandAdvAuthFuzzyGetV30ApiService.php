<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_brand_adv_auth_fuzzy_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaBrandAdvAuthFuzzyGetV30ApiService
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
     * 获取广告账户可投品牌列表，支持按照品牌名称模糊查询
     */
    public function get(): ApiOpenApiV30DpaBrandAdvAuthFuzzyGetGetRequest
    {
        return new ApiOpenApiV30DpaBrandAdvAuthFuzzyGetGetRequest($this);
    }
}
