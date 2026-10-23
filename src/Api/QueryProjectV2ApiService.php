<?php

/**
 * 本文件由 go2php 生成，源: api_query_project_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryProjectV2ApiService
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
     * 结算-查询项目信息
     */
    public function get(): ApiOpenApi2QueryProjectGetRequest
    {
        return new ApiOpenApi2QueryProjectGetRequest($this);
    }
}
