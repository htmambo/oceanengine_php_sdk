<?php

/**
 * 本文件由 go2php 生成，源: api_project_name_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class ProjectNameUpdateV30ApiService
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
     * 更新project的名称
     */
    public function post(): ApiOpenApiV30ProjectNameUpdatePostRequest
    {
        return new ApiOpenApiV30ProjectNameUpdatePostRequest($this);
    }
}
