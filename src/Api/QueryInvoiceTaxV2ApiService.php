<?php

/**
 * 本文件由 go2php 生成，源: api_query_invoice_tax_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryInvoiceTaxV2ApiService
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
     * 通过开票编号查询开票单税控信息
     */
    public function get(): ApiOpenApi2QueryInvoiceTaxGetRequest
    {
        return new ApiOpenApi2QueryInvoiceTaxGetRequest($this);
    }
}
