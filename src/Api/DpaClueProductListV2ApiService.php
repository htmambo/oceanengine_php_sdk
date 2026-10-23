<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_clue_product_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaClueProductListV2ApiService
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
     * 获取线索商品列表
     */
    public function get(): ApiOpenApi2DpaClueProductListGetRequest
    {
        return new ApiOpenApi2DpaClueProductListGetRequest($this);
    }
}
