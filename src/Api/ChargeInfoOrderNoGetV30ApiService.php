<?php

/**
 * 本文件由 go2php 生成，源: api_charge_info_order_no_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ChargeInfoOrderNoGetV30ApiService
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
     * 按三方单号查询充值信息
     */
    public function get(): ApiOpenApiV30ChargeInfoOrderNoGetGetRequest
    {
        return new ApiOpenApiV30ChargeInfoOrderNoGetGetRequest($this);
    }
}
