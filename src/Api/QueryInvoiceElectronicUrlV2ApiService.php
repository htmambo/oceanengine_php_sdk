<?php

/**
 * 本文件由 go2php 生成，源: api_query_invoice_electronic_url_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryInvoiceElectronicUrlV2ApiService
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
     * 开票-获取数电发票链接接口
     */
    public function get(): ApiOpenApi2QueryInvoiceElectronicUrlGetRequest
    {
        return new ApiOpenApi2QueryInvoiceElectronicUrlGetRequest($this);
    }
}
