<?php

/**
 * 本文件由 go2php 生成，源: api_local_file_video_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalFileVideoUploadV30ApiService
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
     * 上传视频
     */
    public function post(): ApiOpenApiV30LocalFileVideoUploadPostRequest
    {
        return new ApiOpenApiV30LocalFileVideoUploadPostRequest($this);
    }
}
