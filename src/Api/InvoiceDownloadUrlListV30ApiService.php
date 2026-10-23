<?php

/**
 * 本文件由 go2php 生成，源: api_invoice_download_url_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class InvoiceDownloadUrlListV30ApiService
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
     * 基于发票申请单，查询开具的发票下载链接（一笔开票申请单会开具多张发票）
     */
    public function get(): ApiOpenApiV30InvoiceDownloadUrlListGetRequest
    {
        return new ApiOpenApiV30InvoiceDownloadUrlListGetRequest($this);
    }
}
