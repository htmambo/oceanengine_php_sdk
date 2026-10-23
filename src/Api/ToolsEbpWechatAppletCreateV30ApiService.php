<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_applet_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpWechatAppletCreateV30ApiService
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
     * 新建微小
     */
    public function post(): ApiOpenApiV30ToolsEbpWechatAppletCreatePostRequest
    {
        return new ApiOpenApiV30ToolsEbpWechatAppletCreatePostRequest($this);
    }
}
