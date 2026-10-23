<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_robot_task_cancel_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueRobotTaskCancelV2ApiService
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
     * 取消机器人任务。
     */
    public function post(): ApiOpenApi2ToolsClueRobotTaskCancelPostRequest
    {
        return new ApiOpenApi2ToolsClueRobotTaskCancelPostRequest($this);
    }
}
