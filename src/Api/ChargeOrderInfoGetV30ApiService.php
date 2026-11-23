<?php

/**
 * 本文件由 go2php 生成，源: api_charge_order_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ChargeOrderInfoGetV30ApiService
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
     * 查询对象名称
     */
    public function get(): ApiOpenApiV30ChargeOrderInfoGetGetRequest
    {
        return new ApiOpenApiV30ChargeOrderInfoGetGetRequest($this);
    }
}
