<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_uni_promotion_data_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportUniPromotionDataGetV10ApiService
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
     * 获取全域数据
     */
    public function get(): ApiOpenApiV10QianchuanReportUniPromotionDataGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportUniPromotionDataGetGetRequest($this);
    }
}
