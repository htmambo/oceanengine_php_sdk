<?php

/**
 * 本文件由 go2php 生成，源: api_security_non_score_disposal_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SecurityNonScoreDisposalInfoGetV30ApiService
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
     * 查询非积分处置数据
     */
    public function get(): ApiOpenApiV30SecurityNonScoreDisposalInfoGetGetRequest
    {
        return new ApiOpenApiV30SecurityNonScoreDisposalInfoGetGetRequest($this);
    }
}
