<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_renew_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DouplusOrderRenewV30ApiService
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
     * 用以给正在投放中的DOU+订单追加预算与投放时长
     */
    public function post(): ApiOpenApiV30DouplusOrderRenewPostRequest
    {
        return new ApiOpenApiV30DouplusOrderRenewPostRequest($this);
    }
}
