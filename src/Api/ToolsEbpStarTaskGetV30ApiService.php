<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_star_task_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpStarTaskGetV30ApiService
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
     * 获取EBP星广联投任务详情仅支持通用版星广联投任务，不兼容短剧版
     */
    public function get(): ApiOpenApiV30ToolsEbpStarTaskGetGetRequest
    {
        return new ApiOpenApiV30ToolsEbpStarTaskGetGetRequest($this);
    }
}
