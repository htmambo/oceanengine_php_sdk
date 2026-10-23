<?php

/**
 * 本文件由 go2php 生成，源: api_std_project_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StdProjectUpdateV30ApiService
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
     * 更新标准项目
     */
    public function post(): ApiOpenApiV30StdProjectUpdatePostRequest
    {
        return new ApiOpenApiV30StdProjectUpdatePostRequest($this);
    }
}
