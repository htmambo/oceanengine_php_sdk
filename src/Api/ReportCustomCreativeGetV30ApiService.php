<?php

/**
 * 本文件由 go2php 生成，源: api_report_custom_creative_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportCustomCreativeGetV30ApiService
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
     * 白名单开放使用，查询2.0创意数据，2.0强切临时过渡使用
     */
    public function get(): ApiOpenApiV30ReportCustomCreativeGetGetRequest
    {
        return new ApiOpenApiV30ReportCustomCreativeGetGetRequest($this);
    }
}
