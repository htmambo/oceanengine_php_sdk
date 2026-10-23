<?php

/**
 * 本文件由 go2php 生成，源: api_tools_landing_group_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsLandingGroupCreateV2ApiService
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
     * test
     */
    public function post(): ApiOpenApi2ToolsLandingGroupCreatePostRequest
    {
        return new ApiOpenApi2ToolsLandingGroupCreatePostRequest($this);
    }
}
