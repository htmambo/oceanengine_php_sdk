<?php

/**
 * 本文件由 go2php 生成，源: api_uni_project_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UniProjectCreateV30ApiService
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
     * 新建全域推广项目
     */
    public function post(): ApiOpenApiV30UniProjectCreatePostRequest
    {
        return new ApiOpenApiV30UniProjectCreatePostRequest($this);
    }
}
