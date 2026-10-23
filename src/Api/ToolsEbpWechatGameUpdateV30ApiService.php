<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_game_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpWechatGameUpdateV30ApiService
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
     * 更新微信小游戏
     */
    public function post(): ApiOpenApiV30ToolsEbpWechatGameUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsEbpWechatGameUpdatePostRequest($this);
    }
}
