<?php

/**
 * 本文件由 go2php 生成，源: api_report_brand_data_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportBrandDataV30ApiService
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
     * 查询品牌自助2.0数据报表
     */
    public function get(): ApiOpenApiV30ReportBrandDataGetRequest
    {
        return new ApiOpenApiV30ReportBrandDataGetRequest($this);
    }
}
