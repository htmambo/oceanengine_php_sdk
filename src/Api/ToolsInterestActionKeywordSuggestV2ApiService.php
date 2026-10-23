<?php

/**
 * 本文件由 go2php 生成，源: api_tools_interest_action_keyword_suggest_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsInterestActionKeywordSuggestV2ApiService
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
     * 获取行为兴趣推荐关键词
     */
    public function get(): ApiOpenApi2ToolsInterestActionKeywordSuggestGetRequest
    {
        return new ApiOpenApi2ToolsInterestActionKeywordSuggestGetRequest($this);
    }
}
