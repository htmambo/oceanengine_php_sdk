<?php

/**
 * 本文件由 go2php 生成，源: api_qianchuan_report_today_live_get_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QianchuanReportTodayLiveGetV10ApiService
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
     * 查询千川广告主（对应账户类型为`QIANCHUAN`）下直播间维度聚合数据，基于全部流量的情况（包括自然+广告），分析抖音号及直播间在竞价推广中的整体数据表现。直客账户支持查看官方抖音号下同主体全部广告账户的数据表现。支持指标包含消耗，点击等（可通过get_tool_response_field_desc工具查询应答内容）
     */
    public function get(): ApiOpenApiV10QianchuanReportTodayLiveGetGetRequest
    {
        return new ApiOpenApiV10QianchuanReportTodayLiveGetGetRequest($this);
    }
}
