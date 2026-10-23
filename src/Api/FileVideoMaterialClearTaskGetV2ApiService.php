<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_material_clear_task_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoMaterialClearTaskGetV2ApiService
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
     * 获取清理任务列表
     */
    public function get(): ApiOpenApi2FileVideoMaterialClearTaskGetGetRequest
    {
        return new ApiOpenApi2FileVideoMaterialClearTaskGetGetRequest($this);
    }
}
