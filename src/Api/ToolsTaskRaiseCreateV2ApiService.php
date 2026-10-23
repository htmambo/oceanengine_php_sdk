<?php

/**
 * 本文件由 go2php 生成，源: api_tools_task_raise_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsTaskRaiseCreateV2ApiService
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
     * 新建优选起量任务
     */
    public function post(): ApiOpenApi2ToolsTaskRaiseCreatePostRequest
    {
        return new ApiOpenApi2ToolsTaskRaiseCreatePostRequest($this);
    }
}
