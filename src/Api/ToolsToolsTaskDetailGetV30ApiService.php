<?php

/**
 * 本文件由 go2php 生成，源: api_tools_tools_task_detail_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsToolsTaskDetailGetV30ApiService
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
     * 支持查询OC范围下指定异步任务处理详情
     */
    public function get(): ApiOpenApiV30ToolsToolsTaskDetailGetGetRequest
    {
        return new ApiOpenApiV30ToolsToolsTaskDetailGetGetRequest($this);
    }
}
