<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_apply_order_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class InvoiceApplyOrderListV30ApiService
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
     * 查询已提交的开票申请
     */
    public function get(): ApiOpenApiV30InvoiceApplyOrderListGetRequest
    {
        return new ApiOpenApiV30InvoiceApplyOrderListGetRequest($this);
    }
}
