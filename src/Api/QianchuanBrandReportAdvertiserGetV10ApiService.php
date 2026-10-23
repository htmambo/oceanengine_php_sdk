<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_brand_report_advertiser_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanBrandReportAdvertiserGetV10ApiService
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
     * 获取品牌广告账户数据
     */
    public function get(): ApiOpenApiV10QianchuanBrandReportAdvertiserGetGetRequest
    {
        return new ApiOpenApiV10QianchuanBrandReportAdvertiserGetGetRequest($this);
    }
}
