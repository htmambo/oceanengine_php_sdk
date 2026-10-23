<?php

/**
 * 本文件由 go2php 生成，源: api_tools_task_raise_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsTaskRaiseGetV2ApiService
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
     * 查询优选起量任务
     */
    public function get(): ApiOpenApi2ToolsTaskRaiseGetGetRequest
    {
        return new ApiOpenApi2ToolsTaskRaiseGetGetRequest($this);
    }
}
