<?php

/**
 * 本文件由 go2php 生成，源: api_local_audience_package_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalAudiencePackageUpdateV30ApiService
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
     * 更新定向包
     */
    public function post(): ApiOpenApiV30LocalAudiencePackageUpdatePostRequest
    {
        return new ApiOpenApiV30LocalAudiencePackageUpdatePostRequest($this);
    }
}
