<?php

/**
 * 本文件由 go2php 生成，源: api_dmp_data_source_file_upload_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DmpDataSourceFileUploadV2ApiService
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
     * 数据源文件上传
     */
    public function post(): ApiOpenApi2DmpDataSourceFileUploadPostRequest
    {
        return new ApiOpenApi2DmpDataSourceFileUploadPostRequest($this);
    }
}
