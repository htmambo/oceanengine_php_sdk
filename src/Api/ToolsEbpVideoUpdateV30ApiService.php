<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_video_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpVideoUpdateV30ApiService
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
     * ebp场景更新视频
     */
    public function post(): ApiOpenApiV30ToolsEbpVideoUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsEbpVideoUpdatePostRequest($this);
    }
}
