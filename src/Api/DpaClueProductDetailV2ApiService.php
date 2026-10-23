<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_clue_product_detail_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaClueProductDetailV2ApiService
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
     * BP获取线索商品详情
     */
    public function get(): ApiOpenApi2DpaClueProductDetailGetRequest
    {
        return new ApiOpenApi2DpaClueProductDetailGetRequest($this);
    }
}
