<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_life_callback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueLifeCallbackV2ApiService
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
     * 回传本地推深转事件
     */
    public function post(): ApiOpenApi2ToolsClueLifeCallbackPostRequest
    {
        return new ApiOpenApi2ToolsClueLifeCallbackPostRequest($this);
    }
}
