<?php

/**
 * 本文件由 go2php 生成，源: api_serve_market_order_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ServeMarketOrderGetV10ApiService
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
     * 查询群峰服务市场订单的接口
     */
    public function get(): ApiOpenApiV10ServeMarketOrderGetGetRequest
    {
        return new ApiOpenApiV10ServeMarketOrderGetGetRequest($this);
    }
}
