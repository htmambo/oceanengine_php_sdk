<?php

/**
 * 本文件由 go2php 生成，源: api_uni_project_monetization_mode_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UniProjectMonetizationModeUpdateV30ApiService
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
     * 批量更新项目变现模式
     */
    public function post(): ApiOpenApiV30UniProjectMonetizationModeUpdatePostRequest
    {
        return new ApiOpenApiV30UniProjectMonetizationModeUpdatePostRequest($this);
    }
}
