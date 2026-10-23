<?php

/**
 * 本文件由 go2php 生成，源: api_tools_wechat_applet_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsWechatAppletListV30ApiService
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
     * openapi场景下的小程序获取接口
     */
    public function get(): ApiOpenApiV30ToolsWechatAppletListGetRequest
    {
        return new ApiOpenApiV30ToolsWechatAppletListGetRequest($this);
    }
}
