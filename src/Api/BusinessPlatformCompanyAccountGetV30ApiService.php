<?php

/**
 * 本文件由 go2php 生成，源: api_business_platform_company_account_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BusinessPlatformCompanyAccountGetV30ApiService
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
     * 查看组织下主体的账户列表
     */
    public function get(): ApiOpenApiV30BusinessPlatformCompanyAccountGetGetRequest
    {
        return new ApiOpenApiV30BusinessPlatformCompanyAccountGetGetRequest($this);
    }
}
