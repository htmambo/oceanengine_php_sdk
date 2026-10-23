<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_uni_promotion_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportUniPromotionGetV10ApiService
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
     * 查询千川广告主账号下全域推广投放账户维度聚合数据。支持指标包含消耗，点击等（可通过get_tool_response_field_desc工具查询应答内容）
     */
    public function get(): ApiOpenApiV10QianchuanReportUniPromotionGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportUniPromotionGetGetRequest($this);
    }
}
