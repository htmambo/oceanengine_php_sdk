<?php

/**
 * 本文件由 go2php 生成，源: api_serve_market_cid_verify_token_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ServeMarketCidVerifyTokenV10ApiService
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
     * 该接口用于校验首次Cid回传数据，校验token是否可用场景，不可用于业务系统
     */
    public function get(): ApiOpenApiV10ServeMarketCidVerifyTokenGetRequest
    {
        return new ApiOpenApiV10ServeMarketCidVerifyTokenGetRequest($this);
    }
}
