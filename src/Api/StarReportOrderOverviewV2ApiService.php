<?php

/**
 * 本文件由 go2php 生成，源: api_star_report_order_overview_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarReportOrderOverviewV2ApiService
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
     * 投后数据
     */
    public function get(): ApiOpenApi2StarReportOrderOverviewGetRequest
    {
        return new ApiOpenApi2StarReportOrderOverviewGetRequest($this);
    }
}
