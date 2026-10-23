<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_info_search_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAwemeInfoSearchV2ApiService
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
     * 查询抖音帐号和类目信息
     */
    public function get(): ApiOpenApi2ToolsAwemeInfoSearchGetRequest
    {
        return new ApiOpenApi2ToolsAwemeInfoSearchGetRequest($this);
    }
}
