<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_micro_applet_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpMicroAppletCreateV30ApiService
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
     * 新建抖音小程序
     */
    public function post(): ApiOpenApiV30ToolsEbpMicroAppletCreatePostRequest
    {
        return new ApiOpenApiV30ToolsEbpMicroAppletCreatePostRequest($this);
    }
}
