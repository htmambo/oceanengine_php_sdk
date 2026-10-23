<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_ticket_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class InvoiceTicketListV30ApiService
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
     * 本接口为申请开票第一步，拉取发票账单，填写账单开票金额
     * 1. SVIP使用根组织账户，拉取组织下所有账户的账单
     * 2. 直客使用账户访问，拉取账户下账单
     */
    public function get(): ApiOpenApiV30InvoiceTicketListGetRequest
    {
        return new ApiOpenApiV30InvoiceTicketListGetRequest($this);
    }
}
