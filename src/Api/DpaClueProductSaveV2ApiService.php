<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_clue_product_save_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaClueProductSaveV2ApiService
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
     * 线索版商品新增&编辑
     */
    public function post(): ApiOpenApi2DpaClueProductSavePostRequest
    {
        return new ApiOpenApi2DpaClueProductSavePostRequest($this);
    }
}
