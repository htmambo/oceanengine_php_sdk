<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_auth_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAwemeAuthCancelV2ApiService
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
     * 抖音授权关系解绑
     */
    public function post(): ApiOpenApi2ToolsAwemeAuthCancelPostRequest
    {
        return new ApiOpenApi2ToolsAwemeAuthCancelPostRequest($this);
    }
}
