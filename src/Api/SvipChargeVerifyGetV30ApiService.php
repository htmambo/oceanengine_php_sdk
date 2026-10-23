<?php

/**
 * 本文件由 go2php 生成，源: api_svip_charge_verify_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SvipChargeVerifyGetV30ApiService
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
     * 校验能否充值接口，校验不通过接口会报错并返回原因；校验通过接口返回可用于充值的合同。
     */
    public function get(): ApiOpenApiV30SvipChargeVerifyGetGetRequest
    {
        return new ApiOpenApiV30SvipChargeVerifyGetGetRequest($this);
    }
}
