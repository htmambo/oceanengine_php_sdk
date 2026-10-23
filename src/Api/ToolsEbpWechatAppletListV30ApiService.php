<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_wechat_applet_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpWechatAppletListV30ApiService
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
     * 获取微信小程序列表
     */
    public function get(): ApiOpenApiV30ToolsEbpWechatAppletListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpWechatAppletListGetRequest($this);
    }
}
