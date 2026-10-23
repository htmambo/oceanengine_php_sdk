<?php

/**
 * 本文件由 go2php 生成，源: api_report_brand_campaign_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportBrandCampaignGetV30ApiService
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
     * 查询AD品牌广告组维度数据报表
     */
    public function get(): ApiOpenApiV30ReportBrandCampaignGetGetRequest
    {
        return new ApiOpenApiV30ReportBrandCampaignGetGetRequest($this);
    }
}
