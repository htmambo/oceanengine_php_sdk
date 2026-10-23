<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_apply_result_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class InvoiceApplyResultGetV30ApiService
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
     * 本接口为第三步，提交开票申请成功之后，用于查询申请中的发票开具结果。发票全部开具成功，返回处理成功
     */
    public function get(): ApiOpenApiV30InvoiceApplyResultGetGetRequest
    {
        return new ApiOpenApiV30InvoiceApplyResultGetGetRequest($this);
    }
}
