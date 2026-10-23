<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_extend_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpAppExtendCreateV30ApiService
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
     * 创建安卓分包
     */
    public function post(): ApiOpenApiV30ToolsEbpAppExtendCreatePostRequest
    {
        return new ApiOpenApiV30ToolsEbpAppExtendCreatePostRequest($this);
    }
}
