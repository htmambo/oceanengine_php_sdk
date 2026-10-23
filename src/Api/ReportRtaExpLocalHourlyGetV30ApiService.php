<?php

/**
 * 本文件由 go2php 生成，源: api_report_rta_exp_local_hourly_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportRtaExpLocalHourlyGetV30ApiService
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
     * 该接口用于查询站内媒体渠道的RTA联合实验数据，支持分时t+5级别数据
     */
    public function get(): ApiOpenApiV30ReportRtaExpLocalHourlyGetGetRequest
    {
        return new ApiOpenApiV30ReportRtaExpLocalHourlyGetGetRequest($this);
    }
}
