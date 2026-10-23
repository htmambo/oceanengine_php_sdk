<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_auth_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAwemeAuthV2ApiService
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
     * 发起广告主和抖音号/抖音短视频的的授权绑定
     */
    public function post(): ApiOpenApi2ToolsAwemeAuthPostRequest
    {
        return new ApiOpenApi2ToolsAwemeAuthPostRequest($this);
    }
}
