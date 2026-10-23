<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_tools_audience_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectToolsAudienceListV30ApiService
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
     * 获取定向调控任务列表
     */
    public function get(): ApiOpenApiV30OcProjectToolsAudienceListGetRequest
    {
        return new ApiOpenApiV30OcProjectToolsAudienceListGetRequest($this);
    }
}
