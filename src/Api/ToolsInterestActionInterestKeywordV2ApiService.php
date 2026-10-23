<?php

/**
 * 本文件由 go2php 生成，源: api_tools_interest_action_interest_keyword_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsInterestActionInterestKeywordV2ApiService
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
     * 兴趣关键词查询
     */
    public function get(): ApiOpenApi2ToolsInterestActionInterestKeywordGetRequest
    {
        return new ApiOpenApi2ToolsInterestActionInterestKeywordGetRequest($this);
    }
}
