<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_game_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpWechatGameCreateV30ApiService
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
     * 微信小游戏新建
     */
    public function post(): ApiOpenApiV30ToolsEbpWechatGameCreatePostRequest
    {
        return new ApiOpenApiV30ToolsEbpWechatGameCreatePostRequest($this);
    }
}
