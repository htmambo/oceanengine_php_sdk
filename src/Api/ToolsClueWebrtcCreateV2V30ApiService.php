<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_webrtc_create_v2_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueWebrtcCreateV2V30ApiService
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
     * 飞鱼为开发者提供网络电话的呼叫能力，该接口功能是为前端电话工具条呼叫时，提供需要用到信息。
     */
    public function post(): ApiOpenApiV30ToolsClueWebrtcCreateV2PostRequest
    {
        return new ApiOpenApiV30ToolsClueWebrtcCreateV2PostRequest($this);
    }
}
