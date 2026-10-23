<?php

/**
 * 本文件由 go2php 生成，源: api_charge_result_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ChargeResultV30ApiService
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
     * 根据充值单查询充值结果接口
     */
    public function get(): ApiOpenApiV30ChargeResultGetRequest
    {
        return new ApiOpenApiV30ChargeResultGetRequest($this);
    }
}
