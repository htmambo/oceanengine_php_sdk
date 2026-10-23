<?php

/**
 * 本文件由 go2php 生成，源: api_query_invoice_self_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryInvoiceSelfV2ApiService
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
     * 获取开票列表
     */
    public function get(): ApiOpenApi2QueryInvoiceSelfGetRequest
    {
        return new ApiOpenApi2QueryInvoiceSelfGetRequest($this);
    }
}
