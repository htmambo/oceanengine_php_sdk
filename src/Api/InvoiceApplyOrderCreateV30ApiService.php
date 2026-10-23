<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_apply_order_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class InvoiceApplyOrderCreateV30ApiService
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
     * 本接口为开票流程第二步，拉取到可开票账单之后，填写账单开票金额，提交
     */
    public function post(): ApiOpenApiV30InvoiceApplyOrderCreatePostRequest
    {
        return new ApiOpenApiV30InvoiceApplyOrderCreatePostRequest($this);
    }
}
