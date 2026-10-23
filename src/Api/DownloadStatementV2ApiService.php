<?php

/**
 * 本文件由 go2php 生成，源: api_download_statement_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DownloadStatementV2ApiService
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
     * 获取结算单附件的下载链接，链接有效3小时，过后可重新获取
     */
    public function get(): ApiOpenApi2DownloadStatementGetRequest
    {
        return new ApiOpenApi2DownloadStatementGetRequest($this);
    }
}
