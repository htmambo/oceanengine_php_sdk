<?php

/**
 * 本文件由 go2php 生成，源: api_local_report_audience_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalReportAudienceGetV30ApiService
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
     * 本地推受众分析报表
     */
    public function get(): ApiOpenApiV30LocalReportAudienceGetGetRequest
    {
        return new ApiOpenApiV30LocalReportAudienceGetGetRequest($this);
    }
}
