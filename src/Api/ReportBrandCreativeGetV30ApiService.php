<?php

/**
 * 本文件由 go2php 生成，源: api_report_brand_creative_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportBrandCreativeGetV30ApiService
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
     * 查询AD品牌广告创意维度数据报表
     */
    public function get(): ApiOpenApiV30ReportBrandCreativeGetGetRequest
    {
        return new ApiOpenApiV30ReportBrandCreativeGetGetRequest($this);
    }
}
