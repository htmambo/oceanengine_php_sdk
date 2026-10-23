<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_game_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMicroGameCreateV30ApiService
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
     * 创建字节小游戏
     */
    public function post(): ApiOpenApiV30ToolsMicroGameCreatePostRequest
    {
        return new ApiOpenApiV30ToolsMicroGameCreatePostRequest($this);
    }
}
