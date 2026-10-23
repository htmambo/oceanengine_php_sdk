<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rubeex_remark_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsRubeexRemarkV2ApiService
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
     * > 获取作品场景信息
     */
    public function get(): ApiOpenApi2ToolsRubeexRemarkGetRequest
    {
        return new ApiOpenApi2ToolsRubeexRemarkGetRequest($this);
    }
}
