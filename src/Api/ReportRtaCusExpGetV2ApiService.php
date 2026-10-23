<?php

/**
 * 本文件由 go2php 生成，源: api_report_rta_cus_exp_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ReportRtaCusExpGetV2ApiService
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
     * 获取穿山甲的广告主分流的联合实验数据
     */
    public function get(): ApiOpenApi2ReportRtaCusExpGetGetRequest
    {
        return new ApiOpenApi2ReportRtaCusExpGetGetRequest($this);
    }
}
