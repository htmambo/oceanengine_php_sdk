<?php

/**
 * 本文件由 go2php 生成，源: api_star_create_project_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarCreateProjectV2ApiService
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
     * 创建星图项目
     */
    public function post(): ApiOpenApi2StarCreateProjectPostRequest
    {
        return new ApiOpenApi2StarCreateProjectPostRequest($this);
    }
}
