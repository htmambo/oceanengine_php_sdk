<?php

/**
 * 本文件由 go2php 生成，源: api_clue_coupon_employee_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ClueCouponEmployeeGetV2ApiService
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
     * API Description
     */
    public function get(): ApiOpenApi2ClueCouponEmployeeGetGetRequest
    {
        return new ApiOpenApi2ClueCouponEmployeeGetGetRequest($this);
    }
}
