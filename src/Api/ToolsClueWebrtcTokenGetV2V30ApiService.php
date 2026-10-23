<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_webrtc_token_get_v2_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueWebrtcTokenGetV2V30ApiService
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
     * 飞鱼为开发者提供网络电话的呼叫能力，该接口功能是为客服生成网络电话坐席token，前端电话工具条登陆坐席时需要用到该token。
     */
    public function post(): ApiOpenApiV30ToolsClueWebrtcTokenGetV2PostRequest
    {
        return new ApiOpenApiV30ToolsClueWebrtcTokenGetV2PostRequest($this);
    }
}
