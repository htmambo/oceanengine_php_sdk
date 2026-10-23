<?php

/**
 * 本文件由 go2php 生成，源: api_sugg_words_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SuggWordsV30ApiService
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
     * 快投2.0获取推荐关键词
     */
    public function post(): ApiOpenApiV30SuggWordsPostRequest
    {
        return new ApiOpenApiV30SuggWordsPostRequest($this);
    }
}
