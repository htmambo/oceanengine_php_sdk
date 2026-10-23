<?php

/**
 * 本文件由 go2php 生成，源: api_dpa_category_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DpaCategoryGetV2ApiService
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
     * 获取DPA分类
     */
    public function get(): ApiOpenApi2DpaCategoryGetGetRequest
    {
        return new ApiOpenApi2DpaCategoryGetGetRequest($this);
    }
}
