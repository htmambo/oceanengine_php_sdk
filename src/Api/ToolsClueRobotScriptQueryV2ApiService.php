<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_robot_script_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueRobotScriptQueryV2ApiService
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
     * 查询机器人剧本列表
     */
    public function post(): ApiOpenApi2ToolsClueRobotScriptQueryPostRequest
    {
        return new ApiOpenApi2ToolsClueRobotScriptQueryPostRequest($this);
    }
}
