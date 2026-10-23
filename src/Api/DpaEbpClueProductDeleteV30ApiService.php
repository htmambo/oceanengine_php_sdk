<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_clue_product_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpClueProductDeleteV30ApiService
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
     * EBP删除升级版商品
     */
    public function post(): ApiOpenApiV30DpaEbpClueProductDeletePostRequest
    {
        return new ApiOpenApiV30DpaEbpClueProductDeletePostRequest($this);
    }
}
