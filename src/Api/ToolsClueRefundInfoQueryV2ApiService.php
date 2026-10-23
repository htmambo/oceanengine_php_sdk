<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_refund_info_query_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueRefundInfoQueryV2ApiService
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
     * 查询线索返款相关信息。
     */
    public function post(): ApiOpenApi2ToolsClueRefundInfoQueryPostRequest
    {
        return new ApiOpenApi2ToolsClueRefundInfoQueryPostRequest($this);
    }
}
