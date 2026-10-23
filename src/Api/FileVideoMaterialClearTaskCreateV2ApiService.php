<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_material_clear_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoMaterialClearTaskCreateV2ApiService
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
     * 创建素材清理任务
     */
    public function post(): ApiOpenApi2FileVideoMaterialClearTaskCreatePostRequest
    {
        return new ApiOpenApi2FileVideoMaterialClearTaskCreatePostRequest($this);
    }
}
