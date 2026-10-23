<?php

/**
 * 本文件由 go2php 生成，源: api_star_report_data_topic_config_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarReportDataTopicConfigV2ApiService
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
     * 用于获取投后达人交付作品全量相关数据主题字段详情获取
     */
    public function get(): ApiOpenApi2StarReportDataTopicConfigGetRequest
    {
        return new ApiOpenApi2StarReportDataTopicConfigGetRequest($this);
    }
}
