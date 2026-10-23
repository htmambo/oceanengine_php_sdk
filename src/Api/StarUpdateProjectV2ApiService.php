<?php

/**
 * 本文件由 go2php 生成，源: api_star_update_project_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarUpdateProjectV2ApiService
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
     * 修改星图项目
     */
    public function post(): ApiOpenApi2StarUpdateProjectPostRequest
    {
        return new ApiOpenApi2StarUpdateProjectPostRequest($this);
    }
}
