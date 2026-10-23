<?php

/**
 * 本文件由 go2php 生成，源: api_audience_package_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class AudiencePackageCreateV2ApiService
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
     * 定向包创建
     */
    public function post(): ApiOpenApi2AudiencePackageCreatePostRequest
    {
        return new ApiOpenApi2AudiencePackageCreatePostRequest($this);
    }
}
