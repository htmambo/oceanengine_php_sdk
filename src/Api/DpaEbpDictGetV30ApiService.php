<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_ebp_dict_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaEbpDictGetV30ApiService
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
     * EBP获取商品库DPA词包
     */
    public function get(): ApiOpenApiV30DpaEbpDictGetGetRequest
    {
        return new ApiOpenApiV30DpaEbpDictGetGetRequest($this);
    }
}
