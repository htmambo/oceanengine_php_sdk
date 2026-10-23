<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DouplusOrderCreateV30ApiService
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
     * 创建DOU+订单(API白名单，联系巨量引擎销售开通）
     */
    public function post(): ApiOpenApiV30DouplusOrderCreatePostRequest
    {
        return new ApiOpenApiV30DouplusOrderCreatePostRequest($this);
    }
}
