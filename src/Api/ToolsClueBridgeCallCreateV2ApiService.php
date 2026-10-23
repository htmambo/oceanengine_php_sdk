<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_bridge_call_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueBridgeCallCreateV2ApiService
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
     * 飞鱼pc端发起语音双呼
     */
    public function post(): ApiOpenApi2ToolsClueBridgeCallCreatePostRequest
    {
        return new ApiOpenApi2ToolsClueBridgeCallCreatePostRequest($this);
    }
}
