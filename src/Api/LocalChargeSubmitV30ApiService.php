<?php

/**
 * 本文件由 go2php 生成，源: api_local_charge_submit_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalChargeSubmitV30ApiService
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
     * 创建一笔充值单，生成支付链接，进行支付
     */
    public function post(): ApiOpenApiV30LocalChargeSubmitPostRequest
    {
        return new ApiOpenApiV30LocalChargeSubmitPostRequest($this);
    }
}
