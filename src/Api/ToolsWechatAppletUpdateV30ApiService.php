<?php

/**
 * 本文件由 go2php 生成，源: api_tools_wechat_applet_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsWechatAppletUpdateV30ApiService
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
     * OPENapi 场景更新小程序信息
     */
    public function post(): ApiOpenApiV30ToolsWechatAppletUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsWechatAppletUpdatePostRequest($this);
    }
}
