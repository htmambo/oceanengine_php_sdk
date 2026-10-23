<?php

/**
 * 本文件由 go2php 生成，源: api_native_anchor_create_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class NativeAnchorCreateV30ApiService
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
     * 锚点创建接口
     */
    public function post(): ApiOpenApiV30NativeAnchorCreatePostRequest
    {
        return new ApiOpenApiV30NativeAnchorCreatePostRequest($this);
    }
}
