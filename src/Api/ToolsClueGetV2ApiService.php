<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueGetV2ApiService
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
     * 该接口用于获取广告主的飞鱼线索列表。
     */
    public function get(): ApiOpenApi2ToolsClueGetGetRequest
    {
        return new ApiOpenApi2ToolsClueGetGetRequest($this);
    }
}
