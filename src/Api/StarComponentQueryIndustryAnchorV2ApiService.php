<?php

/**
 * 本文件由 go2php 生成，源: api_star_component_query_industry_anchor_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarComponentQueryIndustryAnchorV2ApiService
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
     * 行业组件查询
     */
    public function get(): ApiOpenApi2StarComponentQueryIndustryAnchorGetRequest
    {
        return new ApiOpenApi2StarComponentQueryIndustryAnchorGetRequest($this);
    }
}
