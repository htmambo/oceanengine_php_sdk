<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_clue_product_delete_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaClueProductDeleteV2ApiService
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
     * 线索商品删除
     */
    public function post(): ApiOpenApi2DpaClueProductDeletePostRequest
    {
        return new ApiOpenApi2DpaClueProductDeletePostRequest($this);
    }
}
