<?php

/**
 * 本文件由 go2php 生成，源: api_report_rta_exp_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportRtaExpGetV2ApiService
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
     * ## 功能
     * 获取穿山甲联合实验的效果数据
     */
    public function get(): ApiOpenApi2ReportRtaExpGetGetRequest
    {
        return new ApiOpenApi2ReportRtaExpGetGetRequest($this);
    }
}
