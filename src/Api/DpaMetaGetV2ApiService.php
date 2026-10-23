<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_meta_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaMetaGetV2ApiService
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
     * 获取商品库元信息
     */
    public function get(): ApiOpenApi2DpaMetaGetGetRequest
    {
        return new ApiOpenApi2DpaMetaGetGetRequest($this);
    }
}
