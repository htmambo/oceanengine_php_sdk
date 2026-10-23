<?php

/**
 * 本文件由 go2php 生成，源: api_star_report_custom_data_topic_report_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarReportCustomDataTopicReportV2ApiService
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
     * 用于获取累计数据主题对应指标的数据的获取
     */
    public function get(): ApiOpenApi2StarReportCustomDataTopicReportGetRequest
    {
        return new ApiOpenApi2StarReportCustomDataTopicReportGetRequest($this);
    }
}
