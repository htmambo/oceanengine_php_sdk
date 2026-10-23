<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_advertiser_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportAdvertiserGetV10ApiService
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
     * 用于查询千川账户下标准推广投放账户维度聚合数据。仅支持传入账户类型为`QIANCHUAN`的账户；可通过get_tool_response_field_desc工具查询该工具支持的指标维度等信息
     */
    public function get(): ApiOpenApiV10QianchuanReportAdvertiserGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportAdvertiserGetGetRequest($this);
    }
}
