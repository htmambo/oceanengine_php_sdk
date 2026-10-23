<?php

/**
 * 本文件由 go2php 生成，源: api_security_score_total_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SecurityScoreTotalGetV30ApiService
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
     * 账户累计积分
     */
    public function get(): ApiOpenApiV30SecurityScoreTotalGetGetRequest
    {
        return new ApiOpenApiV30SecurityScoreTotalGetGetRequest($this);
    }
}
