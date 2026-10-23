<?php

/**
 * 本文件由 go2php 生成，源: api_report_rta_exp_local_daily_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportRtaExpLocalDailyGetV30ApiService
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
     * 该接口用于查询站内媒体渠道的RTA联合实验数据，支持分天t+1级别数据
     */
    public function get(): ApiOpenApiV30ReportRtaExpLocalDailyGetGetRequest
    {
        return new ApiOpenApiV30ReportRtaExpLocalDailyGetGetRequest($this);
    }
}
