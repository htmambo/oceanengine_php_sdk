<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_clue_product_save_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpClueProductSaveV30ApiService
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
     * EBP创建/编辑升级版商品
     */
    public function post(): ApiOpenApiV30DpaEbpClueProductSavePostRequest
    {
        return new ApiOpenApiV30DpaEbpClueProductSavePostRequest($this);
    }
}
