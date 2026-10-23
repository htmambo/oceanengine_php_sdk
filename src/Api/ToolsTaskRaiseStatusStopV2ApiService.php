<?php

/**
 * 本文件由 go2php 生成，源: api_tools_task_raise_status_stop_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsTaskRaiseStatusStopV2ApiService
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
     * 关闭优选起量任务
     */
    public function post(): ApiOpenApi2ToolsTaskRaiseStatusStopPostRequest
    {
        return new ApiOpenApi2ToolsTaskRaiseStatusStopPostRequest($this);
    }
}
