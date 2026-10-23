<?php

/**
 * 本文件由 go2php 生成，源: api_business_platform_company_info_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class BusinessPlatformCompanyInfoGetV30ApiService
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
     * 获取组织下全部主体
     */
    public function get(): ApiOpenApiV30BusinessPlatformCompanyInfoGetGetRequest
    {
        return new ApiOpenApiV30BusinessPlatformCompanyInfoGetGetRequest($this);
    }
}
