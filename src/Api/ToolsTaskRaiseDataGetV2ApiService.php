<?php

/**
 * 本文件由 go2php 生成，源: api_tools_task_raise_data_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsTaskRaiseDataGetV2ApiService
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
     * 查询优选起量任务数据
     */
    public function get(): ApiOpenApi2ToolsTaskRaiseDataGetGetRequest
    {
        return new ApiOpenApi2ToolsTaskRaiseDataGetGetRequest($this);
    }
}
