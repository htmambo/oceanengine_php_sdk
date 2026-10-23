<?php

/**
 * 本文件由 go2php 生成，源: api_tools_bids_suggest_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsBidsSuggestV30ApiService
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
     * 通过广告分析查询广告的建议出价
     */
    public function get(): ApiOpenApiV30ToolsBidsSuggestGetRequest
    {
        return new ApiOpenApiV30ToolsBidsSuggestGetRequest($this);
    }
}
