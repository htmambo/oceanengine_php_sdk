<?php

/**
 * 本文件由 go2php 生成，源: api_security_audit_results_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SecurityAuditResultsV30ApiService
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
     * 拉取送审对象ID的审核结果
     */
    public function get(): ApiOpenApiV30SecurityAuditResultsGetRequest
    {
        return new ApiOpenApiV30SecurityAuditResultsGetRequest($this);
    }
}
