<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_clue_product_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpClueProductGetV30ApiService
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
     * EBP获取升级版商品详情
     */
    public function get(): ApiOpenApiV30DpaEbpClueProductGetGetRequest
    {
        return new ApiOpenApiV30DpaEbpClueProductGetGetRequest($this);
    }
}
