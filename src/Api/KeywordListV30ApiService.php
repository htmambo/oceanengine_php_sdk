<?php

/**
 * 本文件由 go2php 生成，源: api_keyword_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class KeywordListV30ApiService
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
     * 搜索广告关键词查询
     */
    public function get(): ApiOpenApiV30KeywordListGetRequest
    {
        return new ApiOpenApiV30KeywordListGetRequest($this);
    }
}
