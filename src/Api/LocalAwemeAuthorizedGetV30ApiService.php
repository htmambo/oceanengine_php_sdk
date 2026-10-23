<?php

/**
 * 本文件由 go2php 生成，源: api_local_aweme_authorized_get_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalAwemeAuthorizedGetV30ApiService
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
     * 获取本地推创编可用抖音号
     */
    public function get(): ApiOpenApiV30LocalAwemeAuthorizedGetGetRequest
    {
        return new ApiOpenApiV30LocalAwemeAuthorizedGetGetRequest($this);
    }
}
