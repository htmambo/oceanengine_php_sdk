<?php

/**
 * 本文件由 go2php 生成，源: api_tools_union_flow_package_promotion_report_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsUnionFlowPackagePromotionReportV30ApiService
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
     * 查看穿山甲2.0广告位数据
     */
    public function get(): ApiOpenApiV30ToolsUnionFlowPackagePromotionReportGetRequest
    {
        return new ApiOpenApiV30ToolsUnionFlowPackagePromotionReportGetRequest($this);
    }
}
