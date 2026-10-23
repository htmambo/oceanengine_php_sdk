<?php

/**
 * 本文件由 go2php 生成，源: api_tools_star_task_title_topic_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsStarTaskTitleTopicGetV2ApiService
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
     * 查询星广任务标题指定话题
     */
    public function get(): ApiOpenApi2ToolsStarTaskTitleTopicGetGetRequest
    {
        return new ApiOpenApi2ToolsStarTaskTitleTopicGetGetRequest($this);
    }
}
