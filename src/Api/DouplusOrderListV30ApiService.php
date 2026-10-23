<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DouplusOrderListV30ApiService
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
     * 查询DOU+订单属性
     */
    public function get(): ApiOpenApiV30DouplusOrderListGetRequest
    {
        return new ApiOpenApiV30DouplusOrderListGetRequest($this);
    }
}
