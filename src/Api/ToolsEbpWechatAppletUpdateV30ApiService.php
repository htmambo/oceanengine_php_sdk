<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_applet_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpWechatAppletUpdateV30ApiService
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
     * 更新微信小程序
     */
    public function post(): ApiOpenApiV30ToolsEbpWechatAppletUpdatePostRequest
    {
        return new ApiOpenApiV30ToolsEbpWechatAppletUpdatePostRequest($this);
    }
}
