<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_auth_auth_share_ad_share_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAwemeAuthAuthShareAdShareV2ApiService
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
     * 共享抖音号授权
     */
    public function post(): ApiOpenApi2ToolsAwemeAuthAuthShareAdSharePostRequest
    {
        return new ApiOpenApi2ToolsAwemeAuthAuthShareAdSharePostRequest($this);
    }
}
