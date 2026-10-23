<?php

/**
 * 本文件由 go2php 生成，源: api_security_create_appeal_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class SecurityCreateAppealV30ApiService
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
     * 支持电商平台投放字节广告的商家在电商后投放后台对审核拒绝的广告发起申诉
     */
    public function post(): ApiOpenApiV30SecurityCreateAppealPostRequest
    {
        return new ApiOpenApiV30SecurityCreateAppealPostRequest($this);
    }
}
