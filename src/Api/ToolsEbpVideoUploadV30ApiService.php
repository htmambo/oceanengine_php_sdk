<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_video_upload_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpVideoUploadV30ApiService
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
     * EBP上传视频
     */
    public function post(): ApiOpenApiV30ToolsEbpVideoUploadPostRequest
    {
        return new ApiOpenApiV30ToolsEbpVideoUploadPostRequest($this);
    }
}
