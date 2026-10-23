<?php

/**
 * 本文件由 go2php 生成，源: api_upload_statement_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UploadStatementV2ApiService
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
     * 上传待盖章的结算单附件
     */
    public function post(): ApiOpenApi2UploadStatementPostRequest
    {
        return new ApiOpenApi2UploadStatementPostRequest($this);
    }
}
