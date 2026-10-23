<?php

/**
 * 本文件由 go2php 生成，源: api_file_upload_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileUploadTaskCreateV2ApiService
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
     * 异步上传视频文件
     */
    public function post(): ApiOpenApi2FileUploadTaskCreatePostRequest
    {
        return new ApiOpenApi2FileUploadTaskCreatePostRequest($this);
    }
}
