<?php

/**
 * 本文件由 go2php 生成，源: api_tools_tools_task_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsToolsTaskGetV30ApiService
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
     * 支持查询OC范围下所有异步任务处理进度
     */
    public function get(): ApiOpenApiV30ToolsToolsTaskGetGetRequest
    {
        return new ApiOpenApiV30ToolsToolsTaskGetGetRequest($this);
    }
}
