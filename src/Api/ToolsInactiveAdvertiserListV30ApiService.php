<?php

/**
 * 本文件由 go2php 生成，源: api_tools_inactive_advertiser_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsInactiveAdvertiserListV30ApiService
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
     * 查询近期请求记录中不活跃的账户列表
     */
    public function get(): ApiOpenApiV30ToolsInactiveAdvertiserListGetRequest
    {
        return new ApiOpenApiV30ToolsInactiveAdvertiserListGetRequest($this);
    }
}
