<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rta_set_scope_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsRtaSetScopeV2ApiService
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
     * 设置广告账户下某个RTA策略的生效范围，设置一个新的RTA策略时，默认为停用状态，需要继续调用修改RTA策略状态
     */
    public function post(): ApiOpenApi2ToolsRtaSetScopePostRequest
    {
        return new ApiOpenApi2ToolsRtaSetScopePostRequest($this);
    }
}
