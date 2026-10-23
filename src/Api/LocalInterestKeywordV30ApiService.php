<?php

/**
 * 本文件由 go2php 生成，源: api_local_interest_keyword_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalInterestKeywordV30ApiService
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
    public function get(): ApiOpenApiV30LocalInterestKeywordGetRequest
    {
        return new ApiOpenApiV30LocalInterestKeywordGetRequest($this);
    }
}
