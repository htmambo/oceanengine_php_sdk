<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_update_status_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteUpdateStatusV2ApiService
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
     * 通过此接口，用户可以更改橙子建站站点状态
     */
    public function post(): ApiOpenApi2ToolsSiteUpdateStatusPostRequest
    {
        return new ApiOpenApi2ToolsSiteUpdateStatusPostRequest($this);
    }
}
