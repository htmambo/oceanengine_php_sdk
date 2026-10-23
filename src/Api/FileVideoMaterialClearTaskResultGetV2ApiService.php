<?php

/**
 * 本文件由 go2php 生成，源: api_file_video_material_clear_task_result_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class FileVideoMaterialClearTaskResultGetV2ApiService
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
     * 下载清理任务结果
     */
    public function get(): ApiOpenApi2FileVideoMaterialClearTaskResultGetGetRequest
    {
        return new ApiOpenApi2FileVideoMaterialClearTaskResultGetGetRequest($this);
    }
}
