<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_keyword_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectToolsKeywordStatusUpdateV30ApiService
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
     * 批量启停关键词调控任务
     */
    public function post(): ApiOpenApiV30OcProjectToolsKeywordStatusUpdatePostRequest
    {
        return new ApiOpenApiV30OcProjectToolsKeywordStatusUpdatePostRequest($this);
    }
}
