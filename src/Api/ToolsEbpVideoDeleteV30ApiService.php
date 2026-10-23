<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_video_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpVideoDeleteV30ApiService
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
     * 批量删除EBP视频
     */
    public function post(): ApiOpenApiV30ToolsEbpVideoDeletePostRequest
    {
        return new ApiOpenApiV30ToolsEbpVideoDeletePostRequest($this);
    }
}
