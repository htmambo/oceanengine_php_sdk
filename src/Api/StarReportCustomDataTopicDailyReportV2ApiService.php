<?php

/**
 * 本文件由 go2php 生成，源: api_star_report_custom_data_topic_daily_report_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarReportCustomDataTopicDailyReportV2ApiService
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
     * 用于获取每日趋势数据主题数据获取
     */
    public function get(): ApiOpenApi2StarReportCustomDataTopicDailyReportGetRequest
    {
        return new ApiOpenApi2StarReportCustomDataTopicDailyReportGetRequest($this);
    }
}
