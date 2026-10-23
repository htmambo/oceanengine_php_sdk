<?php

/**
 * 本文件由 go2php 生成，源: api_tools_wechat_applet_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsWechatAppletCreateV30ApiService
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
     * openapi 场景创建小程序
     */
    public function post(): ApiOpenApiV30ToolsWechatAppletCreatePostRequest
    {
        return new ApiOpenApiV30ToolsWechatAppletCreatePostRequest($this);
    }
}
