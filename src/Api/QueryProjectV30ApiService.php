<?php

/**
 * 本文件由 go2php 生成，源: api_query_project_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryProjectV30ApiService
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
     * 由新项目系统提供项目查询接口
     */
    public function get(): ApiOpenApiV30QueryProjectGetRequest
    {
        return new ApiOpenApiV30QueryProjectGetRequest($this);
    }
}
