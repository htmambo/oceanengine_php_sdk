<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_offline_product_batch_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaOfflineProductBatchDeleteV30ApiService
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
     * 支持adv批量删除商品库下的商品
     */
    public function post(): ApiOpenApiV30DpaOfflineProductBatchDeletePostRequest
    {
        return new ApiOpenApiV30DpaOfflineProductBatchDeletePostRequest($this);
    }
}
