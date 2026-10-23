<?php

/**
 * 本文件由 go2php 生成，源: api_uni_project_aweme_authorized_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class UniProjectAwemeAuthorizedGetV30ApiService
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
     * 获取全域创编可用抖音号
     */
    public function get(): ApiOpenApiV30UniProjectAwemeAuthorizedGetGetRequest
    {
        return new ApiOpenApiV30UniProjectAwemeAuthorizedGetGetRequest($this);
    }
}
