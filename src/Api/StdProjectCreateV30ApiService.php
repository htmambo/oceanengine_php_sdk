<?php

/**
 * 本文件由 go2php 生成，源: api_std_project_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StdProjectCreateV30ApiService
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
     * 创建项目
     */
    public function post(): ApiOpenApiV30StdProjectCreatePostRequest
    {
        return new ApiOpenApiV30StdProjectCreatePostRequest($this);
    }
}
