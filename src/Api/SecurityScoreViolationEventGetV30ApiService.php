<?php

/**
 * 本文件由 go2php 生成，源: api_security_score_violation_event_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SecurityScoreViolationEventGetV30ApiService
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
     * 违规积分明细查询
     */
    public function get(): ApiOpenApiV30SecurityScoreViolationEventGetGetRequest
    {
        return new ApiOpenApiV30SecurityScoreViolationEventGetGetRequest($this);
    }
}
