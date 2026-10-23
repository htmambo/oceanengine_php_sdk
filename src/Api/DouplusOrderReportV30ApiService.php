<?php

/**
 * 本文件由 go2php 生成，源: api_douplus_order_report_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class DouplusOrderReportV30ApiService
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
     * 获取DOU+订单指标数据
     */
    public function get(): ApiOpenApiV30DouplusOrderReportGetRequest
    {
        return new ApiOpenApiV30DouplusOrderReportGetRequest($this);
    }
}
