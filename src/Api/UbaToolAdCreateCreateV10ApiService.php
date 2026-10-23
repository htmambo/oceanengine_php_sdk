<?php

/**
 * 本文件由 go2php 生成，源: api_uba_tool_ad_create_create_v10.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UbaToolAdCreateCreateV10ApiService
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
     * 创建计划
     */
    public function post(): ApiOpenApiV10UbaToolAdCreateCreatePostRequest
    {
        return new ApiOpenApiV10UbaToolAdCreateCreatePostRequest($this);
    }
}
