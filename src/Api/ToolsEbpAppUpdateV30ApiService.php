<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_app_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpAppUpdateV30ApiService
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
     * 更新安卓应用母包
     */
    public function post(): ApiOpenApiV30ToolsEbpAppUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsEbpAppUpdatePostRequest($this);
    }
}
