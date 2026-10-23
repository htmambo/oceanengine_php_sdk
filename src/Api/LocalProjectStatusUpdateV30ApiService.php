<?php

/**
 * 本文件由 go2php 生成，源: api_local_project_status_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalProjectStatusUpdateV30ApiService
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
     * 项目批量启停
     */
    public function post(): ApiOpenApiV30LocalProjectStatusUpdatePostRequest
    {
        return new ApiOpenApiV30LocalProjectStatusUpdatePostRequest($this);
    }
}
