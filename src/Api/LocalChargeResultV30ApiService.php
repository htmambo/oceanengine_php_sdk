<?php

/**
 * 本文件由 go2php 生成，源: api_local_charge_result_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalChargeResultV30ApiService
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
     * 查询充值结果，确认充值状态
     */
    public function get(): ApiOpenApiV30LocalChargeResultGetRequest
    {
        return new ApiOpenApiV30LocalChargeResultGetRequest($this);
    }
}
