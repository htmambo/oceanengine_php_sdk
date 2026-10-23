<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_compensate_history_list_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectToolsCompensateHistoryListGetV30ApiService
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
     * 针对智擎版标准项目/调控任务，透传近30天的保障历史列表
     */
    public function get(): ApiOpenApiV30OcProjectToolsCompensateHistoryListGetGetRequest
    {
        return new ApiOpenApiV30OcProjectToolsCompensateHistoryListGetGetRequest($this);
    }
}
