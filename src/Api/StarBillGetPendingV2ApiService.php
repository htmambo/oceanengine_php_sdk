<?php

/**
 * 本文件由 go2php 生成，源: api_star_bill_get_pending_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarBillGetPendingV2ApiService
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
     * 获取待支付金额
     */
    public function get(): ApiOpenApi2StarBillGetPendingGetRequest
    {
        return new ApiOpenApi2StarBillGetPendingGetRequest($this);
    }
}
