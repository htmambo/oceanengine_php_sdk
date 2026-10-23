<?php

/**
 * 本文件由 go2php 生成，源: api_brand_contract_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BrandContractGetV30ApiService
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
     * 查询广告主品牌合同列表
     */
    public function get(): ApiOpenApiV30BrandContractGetGetRequest
    {
        return new ApiOpenApiV30BrandContractGetGetRequest($this);
    }
}
