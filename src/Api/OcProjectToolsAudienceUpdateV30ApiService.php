<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_audience_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectToolsAudienceUpdateV30ApiService
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
     * 编辑定向调控任务
     */
    public function post(): ApiOpenApiV30OcProjectToolsAudienceUpdatePostRequest
    {
        return new ApiOpenApiV30OcProjectToolsAudienceUpdatePostRequest($this);
    }
}
