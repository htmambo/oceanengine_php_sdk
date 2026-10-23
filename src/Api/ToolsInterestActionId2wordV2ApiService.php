<?php

/**
 * 本文件由 go2php 生成，源: api_tools_interest_action_id2word_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsInterestActionId2wordV2ApiService
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
     * 兴趣行为类目关键词id转词
     */
    public function get(): ApiOpenApi2ToolsInterestActionId2wordGetRequest
    {
        return new ApiOpenApi2ToolsInterestActionId2wordGetRequest($this);
    }
}
