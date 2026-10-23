<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_robot_task_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueRobotTaskCreateV2ApiService
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
     * 创建机器人任务。
     */
    public function post(): ApiOpenApi2ToolsClueRobotTaskCreatePostRequest
    {
        return new ApiOpenApi2ToolsClueRobotTaskCreatePostRequest($this);
    }
}
