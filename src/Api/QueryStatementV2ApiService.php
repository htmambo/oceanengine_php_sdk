<?php

/**
 * 本文件由 go2php 生成，源: api_query_statement_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class QueryStatementV2ApiService
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
     * 代理商查询项目关联结算单信息
     */
    public function get(): ApiOpenApi2QueryStatementGetRequest
    {
        return new ApiOpenApi2QueryStatementGetRequest($this);
    }
}
