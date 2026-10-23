<?php

/**
 * 本文件由 go2php 生成，源: api_keyword_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class KeywordDeleteV30ApiService
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
     * 搜索广告关键词删除
     */
    public function post(): ApiOpenApiV30KeywordDeletePostRequest
    {
        return new ApiOpenApiV30KeywordDeletePostRequest($this);
    }
}
