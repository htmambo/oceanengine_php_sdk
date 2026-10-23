<?php

/**
 * 本文件由 go2php 生成，源: api_local_file_upload_task_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalFileUploadTaskCreateV30ApiService
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
     * 异步上传本地推视频
     */
    public function post(): ApiOpenApiV30LocalFileUploadTaskCreatePostRequest
    {
        return new ApiOpenApiV30LocalFileUploadTaskCreatePostRequest($this);
    }
}
