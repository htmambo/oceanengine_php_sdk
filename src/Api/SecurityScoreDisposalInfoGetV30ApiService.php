<?php

/**
 * 本文件由 go2php 生成，源: api_security_score_disposal_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SecurityScoreDisposalInfoGetV30ApiService
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
     * 查看积分处置详情
     */
    public function get(): ApiOpenApiV30SecurityScoreDisposalInfoGetGetRequest
    {
        return new ApiOpenApiV30SecurityScoreDisposalInfoGetGetRequest($this);
    }
}
