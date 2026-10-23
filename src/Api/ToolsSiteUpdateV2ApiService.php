<?php

/**
 * 本文件由 go2php 生成，源: api_tools_site_update_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsSiteUpdateV2ApiService
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
     * 通过此接口，用户可以修改站点的基本信息。
     */
    public function post(): ApiOpenApi2ToolsSiteUpdatePostRequest
    {
        return new ApiOpenApi2ToolsSiteUpdatePostRequest($this);
    }
}
