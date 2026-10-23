<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_aweme_report_order_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanAwemeReportOrderGetV10ApiService
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
     * 随心推报表
     */
    public function get(): ApiOpenApiV10QianchuanAwemeReportOrderGetGetRequest
    {
        return new ApiOpenApiV10QianchuanAwemeReportOrderGetGetRequest($this);
    }
}
