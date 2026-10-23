<?php

/**
 * 本文件由 go2php 生成，源: api_audience_package_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AudiencePackageGetV30ApiService
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
     * 获取定向包
     */
    public function get(): ApiOpenApiV30AudiencePackageGetGetRequest
    {
        return new ApiOpenApiV30AudiencePackageGetGetRequest($this);
    }
}
