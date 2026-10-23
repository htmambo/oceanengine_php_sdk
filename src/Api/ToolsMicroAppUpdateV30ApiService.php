<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_app_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMicroAppUpdateV30ApiService
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
     * 更新字节小程序
     */
    public function post(): ApiOpenApiV30ToolsMicroAppUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsMicroAppUpdatePostRequest($this);
    }
}
