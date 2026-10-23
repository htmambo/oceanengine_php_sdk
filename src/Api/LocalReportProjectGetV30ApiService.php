<?php

/**
 * 本文件由 go2php 生成，源: api_local_report_project_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalReportProjectGetV30ApiService
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
     * 获取项目投放的广告效果数据
     */
    public function get(): ApiOpenApiV30LocalReportProjectGetGetRequest
    {
        return new ApiOpenApiV30LocalReportProjectGetGetRequest($this);
    }
}
