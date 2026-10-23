<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_app_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMicroAppCreateV30ApiService
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
     * 创建字节小程序
     */
    public function post(): ApiOpenApiV30ToolsMicroAppCreatePostRequest
    {
        return new ApiOpenApiV30ToolsMicroAppCreatePostRequest($this);
    }
}
