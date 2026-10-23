<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_custom_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportCustomGetV10ApiService
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
     * 获取自定义报表
     */
    public function get(): ApiOpenApiV10QianchuanReportCustomGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportCustomGetGetRequest($this);
    }
}
