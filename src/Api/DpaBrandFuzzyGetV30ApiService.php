<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_brand_fuzzy_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaBrandFuzzyGetV30ApiService
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
     * 模糊查询品牌信息，目前只返回商标品牌
     */
    public function get(): ApiOpenApiV30DpaBrandFuzzyGetGetRequest
    {
        return new ApiOpenApiV30DpaBrandFuzzyGetGetRequest($this);
    }
}
