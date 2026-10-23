<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_refund_report_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueRefundReportGetV2ApiService
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
     * 汇总统计按月的无效线索返款和呼叫话费返款。
     */
    public function get(): ApiOpenApi2ToolsClueRefundReportGetGetRequest
    {
        return new ApiOpenApi2ToolsClueRefundReportGetGetRequest($this);
    }
}
