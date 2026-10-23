<?php

/**
 * 本文件由 go2php 生成，源: api_download_statement_esign_file_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DownloadStatementEsignFileV2ApiService
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
     * 查询结算单双章附件下载链接
     */
    public function get(): ApiOpenApi2DownloadStatementEsignFileGetRequest
    {
        return new ApiOpenApi2DownloadStatementEsignFileGetRequest($this);
    }
}
