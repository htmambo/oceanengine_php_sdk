<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_brand_adv_auth_industry_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaBrandAdvAuthIndustryGetV30ApiService
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
     * 获取广告账户可投品牌行业信息，目前支持查询云图品牌行业
     */
    public function get(): ApiOpenApiV30DpaBrandAdvAuthIndustryGetGetRequest
    {
        return new ApiOpenApiV30DpaBrandAdvAuthIndustryGetGetRequest($this);
    }
}
