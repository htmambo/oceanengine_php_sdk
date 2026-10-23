<?php

/**
 * 本文件由 go2php 生成，源: api_tools_orange_site_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsOrangeSiteGetV30ApiService
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
     * 获取支持对应优化目标的橙子建站站点列表
     */
    public function get(): ApiOpenApiV30ToolsOrangeSiteGetGetRequest
    {
        return new ApiOpenApiV30ToolsOrangeSiteGetGetRequest($this);
    }
}
