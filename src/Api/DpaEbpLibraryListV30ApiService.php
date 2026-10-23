<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_library_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpLibraryListV30ApiService
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
     * [EBP]获取商品库列表
     */
    public function get(): ApiOpenApiV30DpaEbpLibraryListGetRequest
    {
        return new ApiOpenApiV30DpaEbpLibraryListGetRequest($this);
    }
}
