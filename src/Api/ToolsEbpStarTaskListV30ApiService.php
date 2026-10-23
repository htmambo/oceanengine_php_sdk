<?php

/**
 * 本文件由 go2php 生成，源: api_tools_ebp_star_task_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsEbpStarTaskListV30ApiService
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
     * 获取EBP星广联投任务列表和数据
     */
    public function get(): ApiOpenApiV30ToolsEbpStarTaskListGetRequest
    {
        return new ApiOpenApiV30ToolsEbpStarTaskListGetRequest($this);
    }
}
