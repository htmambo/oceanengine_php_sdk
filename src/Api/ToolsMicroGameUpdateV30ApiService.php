<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_game_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMicroGameUpdateV30ApiService
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
     * 更新字节小游戏
     */
    public function post(): ApiOpenApiV30ToolsMicroGameUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsMicroGameUpdatePostRequest($this);
    }
}
