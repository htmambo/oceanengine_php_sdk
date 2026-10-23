<?php

/**
 * 本文件由 go2php 生成，源: api_tools_admin_info_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAdminInfoV2ApiService
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
     * 获取行政信息
     */
    public function get(): ApiOpenApi2ToolsAdminInfoGetRequest
    {
        return new ApiOpenApi2ToolsAdminInfoGetRequest($this);
    }
}
