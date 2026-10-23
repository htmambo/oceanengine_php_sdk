<?php

/**
 * 本文件由 go2php 生成，源: api_local_report_promotion_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalReportPromotionGetV30ApiService
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
     * 获取广告数据
     */
    public function get(): ApiOpenApiV30LocalReportPromotionGetGetRequest
    {
        return new ApiOpenApiV30LocalReportPromotionGetGetRequest($this);
    }
}
