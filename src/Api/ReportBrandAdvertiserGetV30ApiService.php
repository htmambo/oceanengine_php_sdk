<?php

/**
 * 本文件由 go2php 生成，源: api_report_brand_advertiser_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportBrandAdvertiserGetV30ApiService
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
     * 查询广告主维度数据报表信息
     */
    public function get(): ApiOpenApiV30ReportBrandAdvertiserGetGetRequest
    {
        return new ApiOpenApiV30ReportBrandAdvertiserGetGetRequest($this);
    }
}
