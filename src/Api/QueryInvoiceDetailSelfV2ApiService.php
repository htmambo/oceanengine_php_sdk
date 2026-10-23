<?php

/**
 * 本文件由 go2php 生成，源: api_query_invoice_detail_self_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryInvoiceDetailSelfV2ApiService
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
     * 通过开票单ID/编号查询开票详情数据
     */
    public function get(): ApiOpenApi2QueryInvoiceDetailSelfGetRequest
    {
        return new ApiOpenApi2QueryInvoiceDetailSelfGetRequest($this);
    }
}
