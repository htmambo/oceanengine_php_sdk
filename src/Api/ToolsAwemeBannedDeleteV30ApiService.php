<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_banned_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAwemeBannedDeleteV30ApiService
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
     * PM2
     */
    public function post(): ApiOpenApiV30ToolsAwemeBannedDeletePostRequest
    {
        return new ApiOpenApiV30ToolsAwemeBannedDeletePostRequest($this);
    }
}
