<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_close_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DouplusOrderCloseV30ApiService
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
     * 可批量终止DOU+订单(API白名单，联系巨量引擎销售开通）
     */
    public function post(): ApiOpenApiV30DouplusOrderClosePostRequest
    {
        return new ApiOpenApiV30DouplusOrderClosePostRequest($this);
    }
}
