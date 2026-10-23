<?php

/**
 * 本文件由 go2php 生成，源: api_native_anchor_delete_v30.go
 */

declare(strict_types=1);

namespace Oceanengine\Api;

class NativeAnchorDeleteV30ApiService
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
     * 删除原生锚点
     */
    public function post(): ApiOpenApiV30NativeAnchorDeletePostRequest
    {
        return new ApiOpenApiV30NativeAnchorDeletePostRequest($this);
    }
}
