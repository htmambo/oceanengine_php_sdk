<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_product_delete_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaProductDeleteV2ApiService
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
     * 此接口用于删除商品库中的特定商品
     */
    public function post(): ApiOpenApi2DpaProductDeletePostRequest
    {
        return new ApiOpenApi2DpaProductDeletePostRequest($this);
    }
}
