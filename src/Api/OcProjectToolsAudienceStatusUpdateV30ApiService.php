<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_audience_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectToolsAudienceStatusUpdateV30ApiService
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
     * 批量启停定向调控任务
     */
    public function post(): ApiOpenApiV30OcProjectToolsAudienceStatusUpdatePostRequest
    {
        return new ApiOpenApiV30OcProjectToolsAudienceStatusUpdatePostRequest($this);
    }
}
