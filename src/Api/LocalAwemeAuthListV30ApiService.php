<?php

/**
 * 本文件由 go2php 生成，源: api_local_aweme_auth_list_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalAwemeAuthListV30ApiService
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
     * 抖音号授权列表
     */
    public function get(): ApiOpenApiV30LocalAwemeAuthListGetRequest
    {
        return new ApiOpenApiV30LocalAwemeAuthListGetRequest($this);
    }
}
