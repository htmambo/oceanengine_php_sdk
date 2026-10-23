<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_upload_task_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoUploadTaskListV2ApiService
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
     * 获取异步上传视频文件结果
     */
    public function get(): ApiOpenApi2FileVideoUploadTaskListGetRequest
    {
        return new ApiOpenApi2FileVideoUploadTaskListGetRequest($this);
    }
}
