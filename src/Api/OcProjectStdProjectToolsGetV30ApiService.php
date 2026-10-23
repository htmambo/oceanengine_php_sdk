<?php

/**
 * 本文件由 go2php 生成，源: api_oc_project_std_project_tools_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class OcProjectStdProjectToolsGetV30ApiService
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
     * 支持获取定向、关键词、素材 3类调控任务剩余可用quota
     */
    public function get(): ApiOpenApiV30OcProjectStdProjectToolsGetGetRequest
    {
        return new ApiOpenApiV30OcProjectStdProjectToolsGetGetRequest($this);
    }
}
