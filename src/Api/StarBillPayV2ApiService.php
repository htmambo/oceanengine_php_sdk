<?php

/**
 * 本文件由 go2php 生成，源: api_star_bill_pay_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarBillPayV2ApiService
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
     * 任务付款
     */
    public function post(): ApiOpenApi2StarBillPayPostRequest
    {
        return new ApiOpenApi2StarBillPayPostRequest($this);
    }
}
