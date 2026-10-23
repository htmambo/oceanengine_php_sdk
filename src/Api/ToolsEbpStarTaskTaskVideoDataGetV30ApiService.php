<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_star_task_task_video_data_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpStarTaskTaskVideoDataGetV30ApiService
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
     * 获取EBP星广联投视频数据，支持查看对应组织下全部任务对应的视频列表
     */
    public function get(): ApiOpenApiV30ToolsEbpStarTaskTaskVideoDataGetGetRequest
    {
        return new ApiOpenApiV30ToolsEbpStarTaskTaskVideoDataGetGetRequest($this);
    }
}
