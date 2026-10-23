<?php

/**
 * 本文件由 go2php 生成，源: api_star_brand_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarBrandListV2ApiService
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
     * 获取星图品牌列表
     */
    public function get(): ApiOpenApi2StarBrandListGetRequest
    {
        return new ApiOpenApi2StarBrandListGetRequest($this);
    }
}
