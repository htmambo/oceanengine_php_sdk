<?php

/**
 * 本文件由 go2php 生成，源: api_available_payments_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AvailablePaymentsListV30ApiService
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
     * 充值-查询可用款项信息
     */
    public function get(): ApiOpenApiV30AvailablePaymentsListGetRequest
    {
        return new ApiOpenApiV30AvailablePaymentsListGetRequest($this);
    }
}
