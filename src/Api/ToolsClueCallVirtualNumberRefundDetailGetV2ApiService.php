<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_call_virtual_number_refund_detail_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueCallVirtualNumberRefundDetailGetV2ApiService
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
     * 按主叫号码维度统计按月的呼叫话费返款详情
     */
    public function get(): ApiOpenApi2ToolsClueCallVirtualNumberRefundDetailGetGetRequest
    {
        return new ApiOpenApi2ToolsClueCallVirtualNumberRefundDetailGetGetRequest($this);
    }
}
