<?php

/**
 * 本文件由 go2php 生成，源: api_tools_clue_ext_info_callback_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsClueExtInfoCallbackV2ApiService
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
     * 线索回传后，可享受免费外呼，无效线索返款，提升广告投放精准度。同一条线索可以重复标注，且多次回传的信息都会记录
     */
    public function post(): ApiOpenApi2ToolsClueExtInfoCallbackPostRequest
    {
        return new ApiOpenApi2ToolsClueExtInfoCallbackPostRequest($this);
    }
}
