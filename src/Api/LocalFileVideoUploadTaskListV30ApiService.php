<?php

/**
 * 本文件由 go2php 生成，源: api_local_file_video_upload_task_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalFileVideoUploadTaskListV30ApiService
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
     * 查询异步上传本地推视频结果
     */
    public function get(): ApiOpenApiV30LocalFileVideoUploadTaskListGetRequest
    {
        return new ApiOpenApiV30LocalFileVideoUploadTaskListGetRequest($this);
    }
}
