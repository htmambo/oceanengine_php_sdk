<?php

/**
 * 本文件由 go2php 生成，源: api_star_copyright_create_v2.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class StarCopyrightCreateV2ApiService
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
     * 客户创建版权内容
     */
    public function post(): ApiOpenApi2StarCopyrightCreatePostRequest
    {
        return new ApiOpenApi2StarCopyrightCreatePostRequest($this);
    }
}
