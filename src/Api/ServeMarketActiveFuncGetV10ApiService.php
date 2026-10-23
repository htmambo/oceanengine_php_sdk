<?php

/**
 * 本文件由 go2php 生成，源: api_serve_market_active_func_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ServeMarketActiveFuncGetV10ApiService
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
     * API Description
     */
    public function get(): ApiOpenApiV10ServeMarketActiveFuncGetGetRequest
    {
        return new ApiOpenApiV10ServeMarketActiveFuncGetGetRequest($this);
    }
}
