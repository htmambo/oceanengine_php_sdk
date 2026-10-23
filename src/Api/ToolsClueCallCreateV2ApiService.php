<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_call_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueCallCreateV2ApiService
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
     * 通过入参“呼叫类型”，可以实现双呼、axb、网络等不同的呼叫方式。
     */
    public function post(): ApiOpenApi2ToolsClueCallCreatePostRequest
    {
        return new ApiOpenApi2ToolsClueCallCreatePostRequest($this);
    }
}
