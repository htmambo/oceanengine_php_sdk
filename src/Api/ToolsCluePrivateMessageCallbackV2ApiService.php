<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_private_message_callback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsCluePrivateMessageCallbackV2ApiService
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
     * 允许服务商、代理商、crm等回传私信线索转化数据
     */
    public function post(): ApiOpenApi2ToolsCluePrivateMessageCallbackPostRequest
    {
        return new ApiOpenApi2ToolsCluePrivateMessageCallbackPostRequest($this);
    }
}
