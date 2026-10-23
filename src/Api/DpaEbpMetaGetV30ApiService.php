<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_meta_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpMetaGetV30ApiService
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
     * EBP获取商品库元信息
     */
    public function get(): ApiOpenApiV30DpaEbpMetaGetGetRequest
    {
        return new ApiOpenApiV30DpaEbpMetaGetGetRequest($this);
    }
}
