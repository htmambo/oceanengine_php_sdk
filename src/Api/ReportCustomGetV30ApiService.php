<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportCustomGetV30ApiService
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
     * 用于获取自定义报表数据，支持自由选择和组合指标和维度定义数据报表字段。
     */
    public function get(): ApiOpenApiV30ReportCustomGetGetRequest
    {
        return new ApiOpenApiV30ReportCustomGetGetRequest($this);
    }
}
