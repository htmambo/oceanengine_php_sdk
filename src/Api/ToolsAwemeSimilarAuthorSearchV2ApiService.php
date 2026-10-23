<?php

/**
 * 本文件由 go2php 生成，源: api_tools_aweme_similar_author_search_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ToolsAwemeSimilarAuthorSearchV2ApiService
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
     * 查询抖音类似帐号
     */
    public function get(): ApiOpenApi2ToolsAwemeSimilarAuthorSearchGetRequest
    {
        return new ApiOpenApi2ToolsAwemeSimilarAuthorSearchGetRequest($this);
    }
}
