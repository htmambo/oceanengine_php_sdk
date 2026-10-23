<?php

/**
 * 本文件由 go2php 生成，源: api_tools_wechat_game_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsWechatGameListV30ApiService
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
     * openapi场景获取微信小游戏list
     */
    public function get(): ApiOpenApiV30ToolsWechatGameListGetRequest
    {
        return new ApiOpenApiV30ToolsWechatGameListGetRequest($this);
    }
}
