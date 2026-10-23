<?php

/**
 * 本文件由 go2php 生成，源: api_create_statement_invoice_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CreateStatementInvoiceV2ApiService
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
     * 创建结算单开票接口，支持差额开票
     */
    public function post(): ApiOpenApi2CreateStatementInvoicePostRequest
    {
        return new ApiOpenApi2CreateStatementInvoicePostRequest($this);
    }
}
