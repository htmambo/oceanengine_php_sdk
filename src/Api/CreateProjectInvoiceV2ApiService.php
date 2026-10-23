<?php

/**
 * 本文件由 go2php 生成，源: api_create_project_invoice_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CreateProjectInvoiceV2ApiService
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
     * 创建项目开票接口
     */
    public function post(): ApiOpenApi2CreateProjectInvoicePostRequest
    {
        return new ApiOpenApi2CreateProjectInvoicePostRequest($this);
    }
}
