<?php

/**
 * 本文件由 go2php 生成，源: api_create_statement_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class CreateStatementV2ApiService
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
     * 结算单创建接口，负责代理的结算单创建
     */
    public function post(): ApiOpenApi2CreateStatementPostRequest
    {
        return new ApiOpenApi2CreateStatementPostRequest($this);
    }
}
