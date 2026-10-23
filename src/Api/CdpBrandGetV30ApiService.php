<?php

/**
 * 本文件由 go2php 生成，源: api_cdp_brand_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CdpBrandGetV30ApiService
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
     * 查询云图品牌信息
     */
    public function get(): ApiOpenApiV30CdpBrandGetGetRequest
    {
        return new ApiOpenApiV30CdpBrandGetGetRequest($this);
    }
}
