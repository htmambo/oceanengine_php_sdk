<?php

/**
 * 本文件由 go2php 生成，源: api_query_invoice_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryInvoiceV2ApiService
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
     * 通过开票凭证查询开票单数据
     */
    public function get(): ApiOpenApi2QueryInvoiceGetRequest
    {
        return new ApiOpenApi2QueryInvoiceGetRequest($this);
    }
}
