<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_clue_product_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpClueProductListV30ApiService
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
     * EBP场景下，通过团队ID/advId获取升级版商品列表
     */
    public function get(): ApiOpenApiV30DpaEbpClueProductListGetRequest
    {
        return new ApiOpenApiV30DpaEbpClueProductListGetRequest($this);
    }
}
