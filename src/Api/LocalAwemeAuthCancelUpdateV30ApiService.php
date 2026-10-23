<?php

/**
 * 本文件由 go2php 生成，源: api_local_aweme_auth_cancel_update_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class LocalAwemeAuthCancelUpdateV30ApiService
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
     * 解除抖音号授权
     */
    public function post(): ApiOpenApiV30LocalAwemeAuthCancelUpdatePostRequest
    {
        return new ApiOpenApiV30LocalAwemeAuthCancelUpdatePostRequest($this);
    }
}
