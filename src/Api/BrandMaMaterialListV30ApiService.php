<?php

/**
 * 本文件由 go2php 生成，源: api_brand_ma_material_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandMaMaterialListV30ApiService
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
     * 查询账户下的创意Material
     */
    public function get(): ApiOpenApiV30BrandMaMaterialListGetRequest
    {
        return new ApiOpenApiV30BrandMaMaterialListGetRequest($this);
    }
}
