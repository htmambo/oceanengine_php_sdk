<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_refund_detail_get_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueRefundDetailGetV2ApiService
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
     * 按广告计划维度统计按月的无效线索返款详情。
     */
    public function get(): ApiOpenApi2ToolsClueRefundDetailGetGetRequest
    {
        return new ApiOpenApi2ToolsClueRefundDetailGetGetRequest($this);
    }
}
