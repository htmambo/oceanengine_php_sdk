<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_auth_list_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAwemeAuthListV2ApiService
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
     * 获取抖音授权关系列表
     */
    public function get(): ApiOpenApi2ToolsAwemeAuthListGetRequest
    {
        return new ApiOpenApi2ToolsAwemeAuthListGetRequest($this);
    }
}
