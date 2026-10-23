<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_config_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportCustomConfigGetV30ApiService
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
     * 获取自定义报表可用指标和维度
     */
    public function get(): ApiOpenApiV30ReportCustomConfigGetGetRequest
    {
        return new ApiOpenApiV30ReportCustomConfigGetGetRequest($this);
    }
}
