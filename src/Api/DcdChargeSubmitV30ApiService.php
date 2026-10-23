<?php

/**
 * 本文件由 go2php 生成，源: api_dcd_charge_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DcdChargeSubmitV30ApiService
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
     * 为懂车帝二手车APP提供MAPI接口用户充值提交
     */
    public function post(): ApiOpenApiV30DcdChargeSubmitPostRequest
    {
        return new ApiOpenApiV30DcdChargeSubmitPostRequest($this);
    }
}
