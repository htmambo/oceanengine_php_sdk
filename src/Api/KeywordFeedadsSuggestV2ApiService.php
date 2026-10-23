<?php

/**
 * 本文件由 go2php 生成，源: api_keyword_feedads_suggest_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class KeywordFeedadsSuggestV2ApiService
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
     * API Description
     */
    public function get(): ApiOpenApi2KeywordFeedadsSuggestGetRequest
    {
        return new ApiOpenApi2KeywordFeedadsSuggestGetRequest($this);
    }
}
