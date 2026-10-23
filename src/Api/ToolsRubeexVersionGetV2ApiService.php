<?php

/**
 * 本文件由 go2php 生成，源: api_tools_rubeex_version_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsRubeexVersionGetV2ApiService
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
     * > 获取互动广告作品对应的版本信息
     */
    public function get(): ApiOpenApi2ToolsRubeexVersionGetGetRequest
    {
        return new ApiOpenApi2ToolsRubeexVersionGetGetRequest($this);
    }
}
