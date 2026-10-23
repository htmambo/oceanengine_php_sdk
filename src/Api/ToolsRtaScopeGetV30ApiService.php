<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rta_scope_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsRtaScopeGetV30ApiService
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
     * 获取RTA策略下的项目(广告组)列表，一个rta策略要么绑定campaign要么绑定project，不可能同时绑定
     */
    public function get(): ApiOpenApiV30ToolsRtaScopeGetGetRequest
    {
        return new ApiOpenApiV30ToolsRtaScopeGetGetRequest($this);
    }
}
