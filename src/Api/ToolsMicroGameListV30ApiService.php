<?php

/**
 * 本文件由 go2php 生成，源: api_tools_micro_game_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsMicroGameListV30ApiService
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
     * mapi场景获取字节小游戏信息
     */
    public function get(): ApiOpenApiV30ToolsMicroGameListGetRequest
    {
        return new ApiOpenApiV30ToolsMicroGameListGetRequest($this);
    }
}
