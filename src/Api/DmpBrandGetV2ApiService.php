<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_brand_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DmpBrandGetV2ApiService
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
     * 根据真实的客户adv_id 获取有权限的云图品牌列表信息，信息包括：品牌id、品牌名称、虚拟advid
     */
    public function get(): ApiOpenApi2DmpBrandGetGetRequest
    {
        return new ApiOpenApi2DmpBrandGetGetRequest($this);
    }
}
